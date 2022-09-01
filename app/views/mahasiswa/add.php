<div id="app">

    <ul v-for="siswa in mhs">
        <li>{{siswa.nama}}</li>
        <li>{{siswa.fakultas}}</li>
        <li>{{siswa.jurusan}}</li>
        <li>{{siswa.nim}}</li>
    </ul>

    <form @submit.prevent="addMhs()">
        <input type="text" v-model="newMhsNama">
        <input type="text" v-model="newMhsFakultas">
        <input type="text" v-model="newMhsJurusan">
        <input type="text" v-model="newMhsNim">
        <button>Enter</button>
    </form>
</div>