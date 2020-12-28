var a = 3;

function tambah() {
    var nama = document.getElementById("baru").value;
    var list = document.getElementById("list");
    var newList = document.createElement("li");
    newList.setAttribute("id", i);
    addDataToView(newList, nama);
    list.append(newList);
    i++;
    document.getElementById("judul").innerText = "Tambah Barang";
    return false;
}
function addDataToView(li, nama ,id){
    li.append(nama+" | ");
    li.append(menuEdit(id));
    li.append(" | ");
    li.append(menuHapus(id));
}