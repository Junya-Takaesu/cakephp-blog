<h1>Articles</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->title, ["action" => "view", $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC3339) ?>
        </td>
        <td>
            <?= $this->Html->link("Edit", ["action" => "edit", $article->slug]) ?>
            <?= $this->Form->postLink(
                "Delete",
                ["action" => "delete", $article->slug],
                ["confirm" => __("Are you sure to delete this article?\n\nTitle : {0}", $article->title)])
            ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>