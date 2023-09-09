package com.example.RegistroCivil.Models;

import jakarta.persistence.*;

@Entity
@Table(name = "Ciudadano")
public class Ciudadano {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long id_ciudadano;

    @Column
    private String nombres;

    @Column
    private String apellidos;

    @Column
    private String direccion;

    @Column
    private String telefono;

    @Column
    private String cedula;


    public long getId_ciudadano() {
        return id_ciudadano;
    }

    public void setId_ciudadano(long id_ciudadano) {
        this.id_ciudadano = id_ciudadano;
    }

    public String getNombres() {
        return nombres;
    }

    public void setNombres(String nombres) {
        this.nombres = nombres;
    }

    public String getApellidos() {
        return apellidos;
    }

    public void setApellidos(String apellidos) {
        this.apellidos = apellidos;
    }

    public String getDireccion() {
        return direccion;
    }

    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }

    public String getTelefono() {
        return telefono;
    }

    public void setTelefono(String telefono) {
        this.telefono = telefono;
    }

    public String getCedula() {
        return cedula;
    }

    public void setCedula(String cedula) {
        this.cedula = cedula;
    }
}
