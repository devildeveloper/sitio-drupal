<section>
    <div class="usuario">
        <?php print render($page['admin']) ;
            print render($page['content']) ;?>
        <a id="main-content"></a>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['bottom']); ?>
    </div>
</section>
<style>
    .usuario{
        background-color: #ccc;
        padding: 20px;
        margin-top: 50px;
    }
</style>