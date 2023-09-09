package com.libreria.Libreria.Models;

import jakarta.persistence.*;

import java.time.LocalDate;

@Entity
@Table(name = "Libro")
public class Libro {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long libro_id;
    @Column(unique = true)
    private String libro_codigo;
    @Column
    private String libro_genero;
    @Column
    private String libro_nombre;
    @Column
    private String libro_autor;
    @Column
    private LocalDate libro_fecha;

    public long getLibro_id() {
        return libro_id;
    }

    public void setLibro_id(long libro_id) {
        this.libro_id = libro_id;
    }

    public String getLibro_codigo() {
        return libro_codigo;
    }

    public void setLibro_codigo(String libro_codigo) {
        this.libro_codigo = libro_codigo;
    }

    public String getLibro_genero() {
        return libro_genero;
    }

    public void setLibro_genero(String libro_genero) {
        this.libro_genero = libro_genero;
    }

    public String getLibro_nombre() {
        return libro_nombre;
    }

    public void setLibro_nombre(String libro_nombre) {
        this.libro_nombre = libro_nombre;
    }

    public String getLibro_autor() {
        return libro_autor;
    }

    public void setLibro_autor(String libro_autor) {
        this.libro_autor = libro_autor;
    }

    public LocalDate getLibro_fecha() {
        return libro_fecha;
    }

    public void setLibro_fecha(LocalDate libro_fecha) {
        this.libro_fecha = libro_fecha;
    }
}
