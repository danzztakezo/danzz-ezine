<div id="add_form" class="form">
  <h2> Tambah Profile </h2>
    <div id="contentLeft">
      <form method="post" action="pages_backend/add" id="addForm">
       <span >
        <label for="name"> Nama * :</label> <input type="text" name="name" id="name" class="required"/> 
       </span>
       <span >
        <label for="intitle"> Title *:</label> <input type="text" name="intitle" id="intitle" class="required"/> 
        </span>
       <span >
        <label for="incontent"> Deskripsi * :</label> <textarea name="incontent" id="incontent" cols="5" rows="5" class="required"> </textarea> 
        </span>
       <input type="submit" id="btnsimpan" value="Simpan"/> 
       <span id="saving_proses"></span>
      </form>
    </div>
</div>