/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ejercicio_2;

import java.util.Scanner;

/**
 *
 * @author Sala 101
 */
public class Ejercicio_2 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner sc = new Scanner(System.in);
        System.out.print("Ingrese el número N para la serie de Fibonacci: ");
        int n = sc.nextInt();

        int a = 0;
        int b = 1;

        System.out.println("Los primeros " + n + " números de la serie de Fibonacci son:");

        for (int i = 0; i < n; i++) {
            System.out.print(a + " ");
            int siguiente = a + b;
            a = b;
            b = siguiente;
        }

       
    }
}
    
      