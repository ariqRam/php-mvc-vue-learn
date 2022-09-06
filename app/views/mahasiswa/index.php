<div id="app" class="container card mt-4 bg-dark">
    <div class="card-body text-light">
        <div v-for="siswa in mhs" :key="siswa.id" class="mb-3">
            <h1>{{siswa.nama}} | {{siswa.nim}}</h1>
            <li>{{siswa.fakultas}}</li>
            <li>{{siswa.jurusan}}</li>
        </div>
    </div>
</div>

<script>
    const mhs = <?= json_encode($data['mhs']) ?>;
    
    createApp({
        data() {
            return {
                mhs: mhs,
            }
        }
    }).mount("#app");
</script>
