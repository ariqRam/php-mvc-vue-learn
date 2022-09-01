
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<?php foreach($scripts as $script): ?>
    <?php require_once 'js/' . $script ?>
<?php endforeach; ?>
</body>

</html>