<?php

// Liste des articles
// --

function getArticles($orderBy="ASC") {
    return _getArticles($orderBy);
}

function _getArticles($orderBy) {
   // On définit $bdd comme etant une variable globale
   global $bdd;

   // On définit la requête de sélection des articles
   $query = $bdd->prepare("SELECT id, name, description, image, price FROM product ORDER BY name $orderBy");

    // Execution de la requete
    $query->execute();

   // Execute et retourne le resultat de la requête
   return $query->fetchAll(PDO::FETCH_OBJ);
}



// Ajouter un article
// --

/**
 * setArticle
 * Ajoute un article en BDD et retourne son ID
 */
function setProduct($name, $description, $image, $price, $quantity) {
    // On définit $bdd comme etant une variable globale
    global $bdd;

    // Preparation de la requete
    $query = $bdd->prepare("INSERT INTO articles ( `name`, `description`, `image`, `price`, `quantity`)
                                          VALUES ( :name, :description,  :image,   :price,  :quantity  )");

    // BindValue
    $query->bindParam(':name', $title, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR);
    $query->bindParam(':image', $price, PDO::PARAM_STR);
    $query->bindParam(':image', $quantity, PDO::PARAM_INT);

    // Executiuon de la requete
    $query->execute();

    // Récupération du dernier enregistrement (ID)
    return $bdd->lastInsertId();
}



// Voir un article
// --

/**
 * getArticle
 * recupère et retourne un article non supprimé grace à son ID
 */
function getProduct($id) {
    // On définit $bdd comme etant une variable globale
    global $bdd;

    // Préparation de la requete
    $query = $bdd->prepare("SELECT * FROM product WHERE id=:idProduct");

    // BindValue / BindParam
    $query->bindValue(":idProduct", $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_OBJ);
    $query->closeCursor();

    return $result;
}

/**
 * getArticleForce
 * recupère et retourne un article grace à son ID, supprimé ou non
 */
function getArticleForce($id) {
    // On définit $bdd comme etant une variable globale
    global $bdd;

    // Préparation de la requete
    $query = $bdd->prepare("SELECT * FROM articles WHERE id=:idArticle");

    // BindValue / BindParam
    $query->bindValue(":idArticle", $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_OBJ);
    $query->closeCursor();

    return $result;
}




// Modifier un article
// --

/**
* updateArticle
* Modifie un article
*/
function updateArticle($id, $category, $title, $content, $illustration) {
    // On définit $bdd comme etant une variable globale
    global $bdd;

    // Préparation de la requete de MAJ
    $query = $bdd->prepare("UPDATE articles SET id_category=:category, title=:title, content=:content, illustration=:illustration WHERE id=:idArticle");

    // BindValue / BindParam
    $query->bindParam(':category', $category, PDO::PARAM_INT);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':content', $content, PDO::PARAM_STR);
    $query->bindParam(':illustration', $illustration, PDO::PARAM_STR);
    $query->bindParam(":idArticle", $id, PDO::PARAM_INT);

    // On execute la requete
    $query->execute();

    return $query->rowCount() > 0 ? true : false;
}


// Supprimer un article
// --

/**
 * deleteArticle
 * Supprime un article
 * /!\ il ne s'agit pas d'une vrai suppression, mais d'un changement d'état de
 * la colonne isDeleted
 */
function deleteArticle($id) {
    // On définit $bdd comme etant une variable globale
    global $bdd;

    // Préparation de la requete de MAJ
    $query = $bdd->prepare("UPDATE articles SET isDeleted=1 WHERE id=:idArticle");

    // BindValue / BindParam
    $query->bindParam(":idArticle", $id, PDO::PARAM_INT);

    // On execute la requete
    $query->execute();

    return $query->rowCount() > 0 ? true : false;
}
