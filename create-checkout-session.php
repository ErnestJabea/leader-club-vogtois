<?php
/**
 * Leader Club Vogtois - Stripe Checkout Session Creator
 */

require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = filter_input(INPUT_POST, 'amount', FILTER_VALIDATE_FLOAT);
    $currency = strtolower(filter_input(INPUT_POST, 'currency', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?: 'eur');
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $cause = filter_input(INPUT_POST, 'cause', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$amount || $amount < 1) $amount = 10;

    // Conversion en centimes pour Stripe (ex: 15 EUR => 1500 centimes)
    $amount_in_cents = (int) round($amount * 100);

    // Construction des paramètres d'appel API Stripe Checkout Session
    $stripe_api_url = 'https://api.stripe.com/v1/checkout/sessions';

    $post_fields = http_build_query([
        'payment_method_types' => ['card'],
        'line_items' => [
            [
                'price_data' => [
                    'currency' => $currency,
                    'unit_amount' => $amount_in_cents,
                    'product_data' => [
                        'name' => 'Donation - Leader Club Vogtois (' . ucfirst($cause) . ')',
                        'description' => 'Soutien au projet de leadership et d\'excellence de la jeunesse au Cameroun.',
                    ],
                ],
                'quantity' => 1,
            ]
        ],
        'mode' => 'payment',
        'customer_email' => $email,
        'success_url' => SITE_URL . '/thank-you.php?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => SITE_URL . '/donate.php?status=cancel',
    ]);

    // Requête cURL vers l'API officielle Stripe
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $stripe_api_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, STRIPE_SECRET_KEY . ':');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $session = json_decode($response, true);

    if ($http_code === 200 && isset($session['url'])) {
        // Redirection vers la page de paiement sécurisée hosted par Stripe
        header("Location: " . $session['url']);
        exit;
    } else {
        // En cas d'ébauche ou erreur d'API Stripe, redirection vers donate avec message explicitif
        $error_msg = isset($session['error']['message']) ? $session['error']['message'] : 'Erreur d\'initialisation Stripe';
        header("Location: donate.php?status=error&msg=" . urlencode($error_msg));
        exit;
    }
} else {
    header("Location: donate.php");
    exit;
}
