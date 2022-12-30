<div class="editTable articleTable">
    <h2>Les articles :</h2>
    <br>
    <h3>En attente :</h3>
    <br>
    <?php
    $articlesPending = $pdo->query('SELECT * FROM articles, written WHERE articles.articleId = written.writtenArticleId AND written.writtenStatus = "pending"')->fetchAll(PDO::FETCH_ASSOC);
    $authors = $pdo->query('SELECT * FROM users WHERE users.userRole >= 1')->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="tableContainer">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Auteur</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articlesPending as $article) : ?>
                    <tr data-target="articles" data-articleid="<?= $article['articleId'] ?>">
                        <td><input type="text" class="title" value="<?= $article['articleTitle'] ?>" disabled></td>
                        <td class="textarea_container"><textarea class="content" disabled><?= $article['articleText'] ?></textarea></td>
                        <td>
                            <select class="author" disabled>
                                <?php foreach ($authors as $author) : ?>
                                    <option value="<?= $author['userId'] ?>" <?= $article['writtenUserId'] == $author['userId'] ? 'selected' : '' ?>><?= $author['userFirstname'] . ' ' . $author['userLastname'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <select class="status" disabled>
                                <option value="pending" <?= $article['writtenStatus'] == 'pending' ? 'selected' : '' ?>>En attente</option>
                                <option value="published" <?= $article['writtenStatus'] == 'published' ? 'selected' : '' ?>>Validé</option>
                            </select>
                        </td>
                        <td class="action_links">
                            <button class="btn btn-blue editButton" aria-label="modifier" title="modifier">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </button>
                            <button class="btn validateButton" aria-label="annuler" title="Valider les modifications">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </button>
                            <button class="btn btn-red deleteButton" aria-label="supprimer" title="supprimer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <h3>Publiés :</h3>
    <br>
    <?php
    $articlesPublished = $pdo->query('SELECT * FROM articles, written WHERE articles.articleId = written.writtenArticleId AND written.writtenStatus = "published"')->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="tableContainer">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Auteur</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articlesPublished as $article) : ?>
                    <tr data-target="articles" data-articleid="<?= $article['articleId'] ?>">
                        <td><input type="text" class="title" value="<?= $article['articleTitle'] ?>" disabled></td>
                        <td class="textarea_container"><textarea class="content" disabled><?= $article['articleText'] ?></textarea></td>
                        <td>
                            <select class="author" disabled>
                                <?php foreach ($authors as $author) : ?>
                                    <option value="<?= $author['userId'] ?>" <?= $article['writtenUserId'] == $author['userId'] ? 'selected' : '' ?>><?= $author['userFirstname'] . ' ' . $author['userLastname'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <select class="status" disabled>
                                <option value="pending" <?= $article['writtenStatus'] == 'pending' ? 'selected' : '' ?>>En attente</option>
                                <option value="published" <?= $article['writtenStatus'] == 'published' ? 'selected' : '' ?>>Validé</option>
                            </select>
                        </td>
                        <td class="action_links">
                            <button class="btn btn-blue editButton" aria-label="modifier" title="modifier">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </button>
                            <button class="btn validateButton" aria-label="annuler" title="Valider les modifications">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </button>
                            <button class="btn btn-red deleteButton" aria-label="supprimer" title="supprimer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <h3>Tous les articles :</h3>
    <br>
    <?php
    $allArticles = $pdo->query('SELECT * FROM articles, written WHERE articles.articleId = written.writtenArticleId')->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="tableContainer">
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Auteur</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allArticles as $article) : ?>
                    <tr data-target="articles" data-articleid="<?= $article['articleId'] ?>">
                        <td><input type="text" class="title" value="<?= $article['articleTitle'] ?>" disabled></td>
                        <td class="textarea_container"><textarea class="content" disabled><?= $article['articleText'] ?></textarea></td>
                        <td>
                            <select class="author" disabled>
                                <?php foreach ($authors as $author) : ?>
                                    <option value="<?= $author['userId'] ?>" <?= $article['writtenUserId'] == $author['userId'] ? 'selected' : '' ?>><?= $author['userFirstname'] . ' ' . $author['userLastname'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <select class="status" disabled>
                                <option value="pending" <?= $article['writtenStatus'] == 'pending' ? 'selected' : '' ?>>En attente</option>
                                <option value="published" <?= $article['writtenStatus'] == 'published' ? 'selected' : '' ?>>Validé</option>
                            </select>
                        </td>
                        <td class="action_links">
                            <button class="btn btn-blue editButton" aria-label="modifier" title="modifier">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </button>
                            <button class="btn validateButton" aria-label="annuler" title="Valider les modifications">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                </svg>
                            </button>
                            <button class="btn btn-red deleteButton" aria-label="supprimer" title="supprimer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>