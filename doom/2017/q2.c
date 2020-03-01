#include <stdio.h>
#include <stdlib.h>

#include "q2.h"

#define ARRAY_COUNT(A) sizeof(A) / sizeof(*(A))
int main(void) {
    /* declare two arrays to get the sum of */
    int my_ints[] = {1, 3, 5, 7, 9, 12};
    double my_doubles[] = {1.1, 2.2, 3.3, 4.4, 5.5};
    /* where the result of the sum will be stored */
    int int_sum = 0;
    double dbl_sum = 0.;
    /* walks over the array and applies the function we passed in
     * * to each element. In this case we are calculating the sum of
     * * the numbers stored in the array.
     * */
    array_walk(my_ints, ARRAY_COUNT(my_ints), sizeof(int), &int_sum, &int_add);
    array_walk(my_doubles, ARRAY_COUNT(my_doubles), sizeof(double), &dbl_sum,
               &double_add);
    printf("the sum of ints is %d\n", int_sum);
    printf("the sum of doubles is %f\n", dbl_sum);
    return EXIT_SUCCESS;
}
/*A-prototype
void array_walk(void* array, size_t num_elts, size_t size_elt, void* result,
                void (*operation)(void*, const void*));*/

void array_walk(void* array, size_t num_elts, size_t size_elt, void* result,
                void (*operation)(void*, void*)) {
    /*initiate the vars, namingly the array and loop counter*/
    void* current = array;
    int count;
    /*remember the for loop-worth a mark*/
    for (count = 0; count < num_elts; count++) {
        /*2 marks for correct operation*/
        operation(result, current);
        /*2 marks for correctly updating the current pointer to the next
         * array element*/
        current = ((char*)current) + size_elt;
    }
}
/*end A*/

/*B*/
void int_add(void* result, void* element) {
    /*marks given for retrieving elements*/
    int* i_result = result;
    int* i_elem = element;
    /*marks for updating the result element*/
    *i_result += *i_elem;
}
/*end B*/

/*C*/
void double_add(void* result, void* element) {
    double* d_result = result;
    double* d_elem = element;
    /*marks for updatying the result element*/
    *d_result += *d_elem;
}
/*end C*/
