import java.util.Scanner; 

public class Sort
{
    public static void main(String[] args) {

        Scanner reader = new Scanner(System.in);

        System.out.println("Please enter the number of elements");

        int size = reader.nextInt();
        int [] data = new int[size]; 

        for (int i = 0; i < data.length; i++) {

            System.out.print("Please enter element " + (i+1) + " : ");
            data[i] = reader.nextInt
            ();
        }

        mergeSort(data); 

        System.out.print("Sorted List: ");
        for(int j = 0; j< data.length; j++) {

            System.out.print(data[j] + " "); 
        }
        System.out.println("");

    }

    public static void mergeSort(int[] elements) {

        //base case: one element 
        if(elements.length <= 1) 
            return;            

        //split array into 2 
        int[] first = new int[elements.length / 2];  
        int[] second = new int[elements.length - first.length];


        for(int i = 0; i < elements.length; i++) {

            if(i < first.length) {

                first[i] = elements[i];
            }
            else {

                 second[i - first.length] = elements[i];
            }
        }

         //Recursively split the halves 
        mergeSort(first);                             
        mergeSort(second);                              

        //Merge the halves 
        int ai = 0;                               
        int bi = 0;
                                    
        while(ai + bi < elements.length) { 

            if(bi >= second.length || (ai < first.length && first[ai] < second[bi])) {

                elements[ai + bi] = first[ai]; // (copy element of first array over)
                ai++;

            } else {
                elements[ai + bi] = second[bi]; // (copy element of second array over)
                bi++;
            }
        }
    }
}
