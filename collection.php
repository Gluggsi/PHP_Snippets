// Sanitise a user entered string before Database storage
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

// Check if this is a post
if ( $_SERVER['REQUEST_METHOD'] == 'POST')

// Remove white-spaces
$value = preg_replace( '/\s+/', ' ', $value );

// Remove multiple white-spaces, but leave one
$value = preg_replace('/\s{2,}/',' ', $value);
