package com.libreria.Libreria.Repository;

import com.libreria.Libreria.Models.Libro;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import java.util.List;


public interface LibroRepository extends JpaRepository<Libro, Long>{

    @Query("SELECT m FROM Libro m WHERE m.libro_codigo = ?1")
    public List<Libro> findByLibro_codigo(String codigo);
}
