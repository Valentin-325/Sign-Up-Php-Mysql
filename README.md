In acest proiect am incercat sa fac mai mult decat a trimite pur si simplu cateva date catre o baza de date.
In acest proiect am folosit functiile in php. Cu functia "identicUsername" ce are 3 paramentri si anume $conn (variabila cu care ne conectam la baza de date), 
$username si $email (variabile pe care le-am colectat din campurile de pe pagina signup.php atunci cand este apasat butonul "submit") si care m-a ajutat in a verifica daca
in baza de date creata mai exista un username sau un email identic cu cel cu care incerc sa imi creez cont.
In cazul in care un username sau emai este identic cu unul din baza de date suntem redirectionati catre pagina "signup.php?error=usernametaken".
Parametru de dupa signup.php si anume "error=usernametaken" este utilizat in pagina "signup.php" cu ajutorul lui $_GET.
