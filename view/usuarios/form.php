<div class="mb-3" <?php echo isset($this->datos->id)? "" :"hidden";?>>
      <label for="" class="form-label">Id</label>
      <input type="text" 
        class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" 
        value="<?php echo isset($this->datos->id)? $this->datos->id :"";?>">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text" required
        class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Ingrese el nombre "
        value="<?php echo isset($this->datos->name)? $this->datos->name :"";?>">
      <small id="helpId" class="form-text text-muted">Nombre usuario</small>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="text" required
          class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Ingrese Email "
          value="<?php echo isset($this->datos->email)? $this->datos->email :"";?>">
        <small id="helpId" class="form-text text-muted">Email</small>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="text" required
          class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingrese la contraseña"
          value="<?php echo isset($this->datos->password)? $this->datos->password :"";?>">
        <small id="helpId" class="form-text text-muted">Contraseña</small>
      </div>
      <div class="mb-3">
            <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
