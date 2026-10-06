<?php

class form {
    protected $formCode;

    public function __construct($method = "post", $action = "#") {
        $this->formCode = "<form method=\"$method\" action=\"$action\">\n";
        $this->formCode .= "<fieldset>\n";
    }

    public function settext($type = "text", $name = "", $value = "", $size = 20, $maxlength = 50) {
        $this->formCode .= "<input type=\"$type\" name=\"$name\" value=\"$value\" size=\"$size\" maxlength=\"$maxlength\">\n";
    }

    public function setsubmit($value = "Envoyer", $name = "submit", $onclick = "") {
        $this->formCode .= "<input type=\"submit\" name=\"$name\" value=\"$value\" onclick=\"$onclick\">\n";
    }

    public function getform() {
        $this->formCode .= "</fieldset>\n</form>\n";
        return $this->formCode;
    }
}

$form1 = new form();
$form1->settext("text", "nom", "", 25, 30);
$form1->settext("text", "prenom", "", 25, 30);
$form1->setsubmit("Valider", "ok", "");

echo $form1->getform();
?>
