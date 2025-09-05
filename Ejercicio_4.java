/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejercicio_4;

import java.util.Scanner;

/**
 *
 * @author Sala 101
 */
public class Ejercicio_4 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc = new Scanner(System.in);
        
        System.out.print("Ingrese el numero");
        
        int n = sc.nextInt();
        
        int Factorial = 1;
        
        for (int i = 1; i <= n; i++) {
            Factorial *=i;
             System.out.print("El factorial del:" + n + "es:" + Factorial);
        }
    }
     
}
