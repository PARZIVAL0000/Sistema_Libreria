package com.example.RegistroCivil.Repository;

import com.example.RegistroCivil.Models.Ciudadano;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import java.util.List;

public interface CiudadanoRepository extends JpaRepository<Ciudadano, Long> {

    @Query("SELECT m FROM Ciudadano m WHERE m.cedula = ?1")
    public List<Ciudadano> findByCedula(String cedula);

    @Query("DELETE FROM Ciudadano m WHERE m.cedula = ?1")
    public boolean deleteByCedula(String cedula);
}
