<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-8 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Usuarios y Seguridad</span>
    <h3 class="page-title">Gestión de Usuarios/Colaboradores</h3>
  </div>
  <div class="col-12 col-sm-4 d-flex align-items-center">
  </div>
</div>
<div class="card card-small">
<div class="card-body py-0 px-0">
<table id="tbl-todos-documentosAP" class="table mb-0 ">
  <thead class="bg-light">
    <tr>
      <th scope="col" title="Operaciones" ></th>
      <th scope="col">Cédula</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Celular Personal</th>
      <th scope="col">Celular Corporativo</th>
      <th scope="col">Correo Personal</th>
      <th scope="col">Correo Corporativo</th>
      <th scope="col">Cargo</th>
      <th scope="col">Jefe Inmediato</th>
      <th scope="col" class="td-dato-usuario">Nombre de Usuario </th>
      <th scope="col" class="td-dato-usuario">Último Inicio </th>
      <th scope="col" class="td-dato-usuario">Admin</th>
      <th scope="col" title="Firma" ><i class="material-icons">note</i></th>
      <th scope="col" title="Foto" ><i class="material-icons">photo</i></th>
      <!--<th scope="col" title="Permisos" ><i class="material-icons">lock</i></th>-->
      <!--<th scope="col" title="Publicado" ><i class="material-icons">visibility</i></th>-->
      <th scope="col" title="Estado" ><i class="material-icons">flag</i></th>
    </tr>
  </thead>
  <tbody>
    {% for Colaborador in Colaboradores %}
    <tr>
      <td scope="col" class="btn-operaciones-tablas" >
        <div class="btn-group btn-group-sm btn-group-toggle " data-toggle="buttons">
          <button class="btn btn-xs btn-info" onclick="mostrarModalDetallesUsuarioColaborador({{Colaborador.documentoID}});" ><i class="fas fa-eye"></i></button>
          <button class="btn  btn-xs btn-success" onclick="mostrarFormularioEditarUsuarioColaborador({{Colaborador.documentoID}});" ><i class="fas fa-edit"></i></button>
          <button class="btn btn-xs btn-danger" onclick="mostrarConfirmacionEliminarUsuarioColaborador({{Colaborador.documentoID}});"><i class="fas fa-trash"></i></button>
        </div>
      </td>
      <td scope="col" title="{{Colaborador.Persona.tipoIdentificacionTITULO}}" style="font-size:70%" >{{Colaborador.Persona.personaIDENTIFICACION}}</td>
      <td scope="col" >{{Colaborador.Persona.personaNOMBRES}}</td>
      <td scope="col">{{Colaborador.Persona.personaAPELLIDOS}}</td>
      <td scope="col">{{Colaborador.Persona.personaCELULAR}}</td>
      <td scope="col">{{Colaborador.colaboradorCELULAR}}</td>
      <td scope="col">{{Colaborador.Persona.personaEMAIL}}</td>
      <td scope="col">{{Colaborador.colaboradorEMAIL}}</td>
      <td scope="col">{{Colaborador.Cargo.cargoTITULO}}</td>
      <td scope="col">{{Colaborador.JefeInmediato.cargoTITULO}}</td>

      <td scope="col" class="td-dato-usuario">{{Colaborador.Usuario.usuarioNOMBRE}}</td>
      <td scope="col" class="td-dato-usuario">{{Colaborador.Usuario.usuarioULTIMAVISITA}} - [{{Colaborador.Usuario.usuarioULTIMALATITUD}},{{Colaborador.Usuario.usuarioULTIMALONGITUD}}]</td>
      <td scope="col" class="td-dato-usuario">{{Colaborador.Usuario.usuarioADMINISTRADOR}}</td>

      <!--<td scope="col">{{Colaborador.colaboradorFCHINGRESO|date('Y-m-d')}}</td>-->
      <td scope="col">
        {% if Colaborador.colaboradorFIRMA %}
        <a href="{{Colaborador.colaboradorFIRMA}}" target="_blank" class="btn btn-xs btn-outline-royal-blue"><i class="fas fa-link"></i></a>

        <small style="font-size: 0px;">{{Colaborador.colaboradorFIRMA}}</small>
        {% else %}
        <button title="NO TIENE UN ARCHIVO ASOCIADO." class="btn btn-xs btn-outline-salmon" disabled ><i class="fas fa-unlink"></i></button>
        {% endif %}
      </td>
      <td scope="col">
        {% if Colaborador.colaboradorFOTO %}
        <a href="{{Colaborador.colaboradorFOTO}}" target="_blank" class="btn btn-xs btn-outline-java"><i class="fas fa-image"></i></a>
        <small style="font-size: 0px;">{{Colaborador.colaboradorFOTO}}</small>
        {% else %}
        <button title="NO TIENE UNA IMAGEN ASOCIADA." class="btn btn-xs btn-outline-salmon" disabled ><i class="fas fa-camera"></i></button>
        {% endif %}
      </td>
      <!--<td scope="col" title="{{Colaborador.documentoPUBLICO}}">-->
      <!--  {% if Colaborador.documentoPUBLICO == 'SI' %}-->
      <!--  <button onclick="mostrarConfirmacionCambiarSeguridadUsuarioColaborador({{Colaborador.documentoID}}, abrirGestorDocumentosAP );" class="btn btn-xs btn-outline-java"><i class="fas fa-lock-open"></i></button>-->
      <!--  {% else %}-->
      <!--  <button onclick="mostrarConfirmacionCambiarSeguridadUsuarioColaborador({{Colaborador.documentoID}}, abrirGestorDocumentosAP );"class="btn btn-xs btn-outline-salmon"><i class="fas fa-lock"></i></button>-->
      <!--  {% endif %}-->
      <!--  <small style="font-size: 0px;">{{Colaborador.documentoPUBLICO}}</small>-->
      <!--</td>-->
      <!--<td scope="col" title="{{Colaborador.documentoPUBLICADO}}">-->
      <!--  {% if Colaborador.documentoPUBLICADO == 'SI' %}-->
      <!--  <button onclick="mostrarConfirmacionCambiarVisibilidadUsuarioColaborador({{Colaborador.documentoID}}, abrirGestorDocumentosAP);" class="btn btn-xs btn-outline-java"><i class="fas fa-eye"></i></button>-->
      <!--  {% else %}-->
      <!--  <button onclick="mostrarConfirmacionCambiarVisibilidadUsuarioColaborador({{Colaborador.documentoID}}, abrirGestorDocumentosAP);" class="btn btn-xs btn-outline-salmon"><i class="fas fa-eye-slash"></i></button>-->
      <!--  {% endif %}-->
      <!--  <small style="font-size: 0px;">{{Colaborador.documentoPUBLICADO}}</small>-->
      <!--</td>-->
      <td scope="col">
        {% if Colaborador.Usuario.usuarioESTADO == 'ACTIVO' %}
        <button onclick="mostrarConfirmacionCambiarEstadoUsuarioColaborador({{Colaborador.colaboradorID}}, abrirGestorDocumentosAP);" class="btn btn-xs btn-outline-java"><i class="fas fa-thumbs-up"></i></button>
        {% elseif Colaborador.Usuario.usuarioESTADO == 'SUSPENDIDO' %}
        <button onclick="mostrarConfirmacionCambiarEstadoUsuarioColaborador({{Colaborador.colaboradorID}}, abrirGestorDocumentosAP);" class="btn btn-xs btn-outline-salmon"><i class="fas fa-thumbs-down"></i></button>
        {% elseif Colaborador.Usuario.usuarioESTADO == 'DESACTIVO' %}
        <button onclick="mostrarConfirmacionRecuperarUsuarioColaborador({{Colaborador.colaboradorID}}, abrirGestorDocumentosAP);" class="btn btn-xs btn-outline-dark"><i class="fas fa-trash-alt"></i></button>
        {% endif %}
        <small style="font-size: 0px;">{{Colaborador.Usuario.usuarioESTADO}}</small>

      </td>
    </tr>
    {% endfor %}
  </tbody>
</table>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tbl-todos-documentosAP').DataTable();
    $("#botonera_sobreTablaAP.botonera").html(
      '<button type="submit" onclick="mostrarFormularioNuevoUsuarioColaborador();" class="btn btn-sm btn-accent btn-primary"><i class="material-icons">add</i> Nuevo </button>'
      + '<button type="submit" onclick="abrirGestorDocumentosAP();" class="btn btn-sm btn-gray"><i class="material-icons">refresh</i> Actualizar </button>'
      );
} );
</script>