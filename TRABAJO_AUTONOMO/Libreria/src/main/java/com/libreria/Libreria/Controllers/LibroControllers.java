package com.libreria.Libreria.Controllers;

import com.libreria.Libreria.Models.Libro;
import com.libreria.Libreria.Services.LibroServices;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping(path = "/LibroControllers")
public class LibroControllers {

    private LibroServices libro_service;

    @Autowired
    public LibroControllers(LibroServices l){
        this.libro_service = l;
    }

    @GetMapping
    public List<Libro> getLibros(){
        return this.libro_service.getLibros();
    }

    @GetMapping(path = "/{codigo}")
    public List<Libro> getLibro(@PathVariable(name = "codigo") String codigo){
        return this.libro_service.getLibro(codigo);
    }
}
