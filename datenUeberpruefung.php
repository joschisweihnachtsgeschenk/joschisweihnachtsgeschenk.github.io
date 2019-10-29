
if (isset($_POST['submit'])) {} 
$code = htmlspecialchars(trim($_POST['code']));
$errors = [];
$success = false;
/**
 *  input textfeld | name="name"
 *  Typ: string
 *  Kriterien: mindestens 3 Zeichen lang
 */
if (empty($code)) {
  $errors[] = HTML_ERROR_START . 'Bitte gib den Code ein.' . HTML_ERROR_END;
} else if (strlen($code) != Christmas19){
  $errors[] = HTML_ERROR_START . 'Das ist leider nicht der richtige Code. Versuche es noch einmal.' . HTML_ERROR_END;
}
if (count($errors) === 0) {} 
