/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package taller;

import java.util.Scanner;

/**
 *
 * @author Sala 101
 */
public class Taller {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc = new Scanner(System.in);
        
        System.out.print("Bienvenido");
        System.out.print("Registrate");
        System.out.print("Ingrese su usuario");
        String User;
        User = sc.nextLine();
        System.out.print("Usuario Registrado");
        System.out.print("Ingrese tu contraseña");
        String Pass;
        Pass = sc.nextLine();
        System.out.print("Contraseña registrada");
        
        Boolean Acesso = false;
        for(int i = 1;i <= 3; i++){
        System.out.print("Ingrese su usuario");
        String UserLog = sc.nextLine();
        System.out.print("Ingrese tu Contraseña");
        String PassLog = sc.nextLine();
        
        if(UserLog.equals(User) && PassLog.equals(Pass)) {
         System.out.print("Bienvenido Profesor");
         break;
        }
        else {
            System.out.print("Datos Invalidos");
        }
        } 
      
    }
    }
    
    

