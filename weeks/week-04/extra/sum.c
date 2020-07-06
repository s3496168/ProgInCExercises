#include "sum.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
/**
 * zeroes out the array (writes zeroes into the memory to make the array an
 * empty array
 **/
void intlist_init(struct int_list *thelist) {
    memset(thelist, 0, sizeof(*thelist));
}

/**
 * adds a number to our list of numbers. Will return FALSE if there is no
 * space left in the array.
 **/
BOOLEAN intlist_add(struct int_list *thelist, int new_num) {
    if (thelist->len >= MAXLEN) {
        return FALSE;
    }
    thelist->nums[thelist->len++] = new_num;
    return TRUE;
}

/**
 * tests wther the sum calculated from the array provided matches the required
 * sum
 **/
static BOOLEAN sum_equals(const struct int_list *thelist, int desired_sum) {
    long count;
    int sum = 0;

    /* add up the array elements */
    for (count = 0; count < thelist->len; ++count) {
        sum += thelist->nums[count];
    }
    return sum == desired_sum;
}

/**
 * define your algorithm here to check wheter any subset of the numbers in the
 * array match the target sum. This is the only function you need to implement
 * for tutorial 4
 **/
BOOLEAN matching_sum(const struct int_list *thelist, int desired_sum) {}

#define ARRAYSIZE 3
#define TARGETSUM 12

int main(void) {
    struct int_list number_list;
    /* numbers to find the sum on */
    int nums[] = {3, 4, 5};
    long count;

    intlist_init(&number_list);
    /* add the numbers to the int list */
    for (count = 0; count < ARRAYSIZE; ++count) {
        intlist_add(&number_list, nums[count]);
    }
    /* check for a matching sum in the subset of the int list */
    if ((matching_sum(&number_list, TARGETSUM))) {
        printf("matching sum is found\n");
    } else {
        printf("matching sum is not found\n");
    }
    return EXIT_SUCCESS;
}
