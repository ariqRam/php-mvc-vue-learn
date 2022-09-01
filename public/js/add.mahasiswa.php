<script>
    const { createApp, ref } = Vue;
    const mhs = ref(<?= json_encode($data['mhs']) ?>)
    console.log(mhs.value)
    const newMhsNama = ref('')
    const newMhsFakultas = ref('')
    const newMhsJurusan = ref('')
    const newMhsNim = ref('')


    const addMhs = () => {
        mhs.value.push({
            nama: newMhsNama,
            fakultas: newMhsFakultas,
            jurusan: newMhsJurusan,
            nim: newMhsNim
        })
    }
    
    createApp({
        data() {
            return {
                mhs: mhs,
                newMhsNama: newMhsNama,
                newMhsFakultas: newMhsFakultas,
                newMhsJurusan: newMhsJurusan,
                newMhsNim: newMhsNim,
                addMhs: addMhs
            }
        }
    }).mount("#app");
</script>