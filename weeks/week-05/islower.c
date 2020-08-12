#define TRUE 1
#define FALSE 0
#define islower(c) (c>= 'a' && c <= 'z' ? TRUE: FALSE)

#include <stdio.h>
#include <stdlib.h>


int main()
{
   char c1 = 'B';
   char c2 = 'a';

   printf("Result of islower(c) %d \n", islower(c1));
   printf("Result of islower(c) %d \n", islower(c2));


   return EXIT_SUCCESS;
}