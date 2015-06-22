<br />
<br />
<?php
$this->load->view("includes/Header");
$this->load->view("includes/Body");
$this->load->view("includes/Footer");

foreach ($professores->result() as $prof)  {
    echo "Nome do professor<br />";
    echo $prof->nome; echo "<br />";
    echo "pontualidade do professor<br />";
    echo $prof->pontualidade; echo "<br />";
    echo "assiduidade do professor<br />";
    echo $prof->assiduidade; echo "<br />";
    echo "organização do professor<br />";
    echo $prof->organização; echo "<br />";
    echo "disciplina do professor<br />";
    echo $prof->disciplina; echo "<br />";
}
?>
