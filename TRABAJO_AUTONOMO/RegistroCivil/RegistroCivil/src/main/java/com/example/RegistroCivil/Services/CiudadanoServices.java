package com.example.RegistroCivil.Services;

import com.example.RegistroCivil.Models.Ciudadano;
import com.example.RegistroCivil.Repository.CiudadanoRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class CiudadanoServices {

    private CiudadanoRepository ciudadano_repository;

    @Autowired
    public CiudadanoServices(CiudadanoRepository cr){
        this.ciudadano_repository = cr;
    }

    public List<Ciudadano> getCiudadanos(){
        return this.ciudadano_repository.findAll();
    }

    public List<Ciudadano> getCiudadano(String cedula){
        return this.ciudadano_repository.findByCedula(cedula);
    }

    public String updateCiudadano(Ciudadano registro){
        //registro actualizado correctamente...
        this.ciudadano_repository.save(registro);
        return "Actualizado Correctamente";
    }

    public String addCiudadano(Ciudadano ciudadano){
        this.ciudadano_repository.save(ciudadano);
        return "Agregado Correctamente";
    }

    public String deleteCiudadano(String cedula){
        this.ciudadano_repository.deleteByCedula(cedula);
        return "Eliminado Correctamente";
    }
}
