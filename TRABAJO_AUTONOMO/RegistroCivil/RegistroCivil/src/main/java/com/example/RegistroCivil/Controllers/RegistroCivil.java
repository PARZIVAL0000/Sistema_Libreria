package com.example.RegistroCivil.Controllers;

import com.example.RegistroCivil.Models.Ciudadano;
import com.example.RegistroCivil.Services.CiudadanoServices;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping(path = "/RegistroCivil")
public class RegistroCivil {

    private CiudadanoServices ciudadano_servicio;

    @Autowired
    public RegistroCivil(CiudadanoServices cs){
        this.ciudadano_servicio = cs;
    }

    @GetMapping
    public List<Ciudadano> obtener(){
        return this.ciudadano_servicio.getCiudadanos();
    }

    @GetMapping(path = "/{cedula}")
    public List<Ciudadano> obtenerPorCedula(@PathVariable(name = "cedula") String cedula){
        return this.ciudadano_servicio.getCiudadano(cedula);
    }

    @PutMapping(path = "/{id}")
    public String actualizar(@PathVariable(name = "id") long id, @RequestBody Ciudadano ciudadano){
        ciudadano.setId_ciudadano(id);
        return this.ciudadano_servicio.updateCiudadano(ciudadano);
    }

    @PostMapping
    public String agregar(@RequestBody List<Ciudadano> ciudadano){

        for (Ciudadano c : ciudadano) {
            //debemos registrar ya sea por un solo valor... o exactamente por vacios...
            this.ciudadano_servicio.addCiudadano(c);
        }

        return "Agregado Correctamente";
    }

    @DeleteMapping(path = "/{cedula}")
    public String eliminar(@PathVariable(name = "cedula") String cedula){
        return this.ciudadano_servicio.deleteCiudadano(cedula);
    }
}
