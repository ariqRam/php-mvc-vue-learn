<script>
    const { createApp, ref } = Vue;
    const mhs = <?= json_encode($data['mhs']) ?>
    
    createApp({
        data() {
            return {
                mhs: mhs,
            }
        }
    }).mount("#app");
</script>