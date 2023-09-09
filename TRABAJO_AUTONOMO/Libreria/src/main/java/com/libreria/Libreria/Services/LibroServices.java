package com.libreria.Libreria.Services;

import com.libreria.Libreria.Models.Libro;
import com.libreria.Libreria.Repository.LibroRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class LibroServices {
    private LibroRepository libro_repository;
    @Autowired
    public LibroServices(LibroRepository l){
        this.libro_repository = l;
    }
    public List<Libro> getLibros(){
        return this.libro_repository.findAll();
    }
    public List<Libro> getLibro(String codigo){
        return this.libro_repository.findByLibro_codigo(codigo);
    }
}
