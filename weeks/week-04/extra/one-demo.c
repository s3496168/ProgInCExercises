#include <stdlib.h>
#include <stdio.h>
#include "sum.h"
#define TARGETSUM 13
#define ARRTTL 12

BOOLEAN sum_equals();
int main(void) {

    int i, j, k;
    int sum = 0;
    BOOLEAN foundit = FALSE;
    int h[ARRTTL] = {1, 3, 5, 7, 9};
    /*sum = arr[0]* i + arr[1]*j+aa[2]*l*/
    for (i = 0; i < 13; ++i) {
        for (i = 0; i < 13; ++i) {
            for (i = 0; i < 13; ++i) {
                sum = h[0] * i + h[1] * j + h[2] * 1;
                printf("%d", sum);
                if (sum == TARGETSUM) {
                    foundit = TRUE;
                    break;
                }
            }
        }
        if (foundit = TRUE) {
            printf("Target sum found\n");
        } else {
            printf("Target sum not found\n");
        }
    }

    BOOLEAN matching_sum(const struct int_list * thelist, int desired_sum) {
        long skip_count;
        /*check if the list has been reduced to zero as that means there has
         * been no matching sum*/
        if (thelist->len == 0) {
            return FALSE;
        }
        /*check of the sum of elements in the array matches*/
        if (sum_equals(thelist, desired_sum)) {
            return TRUE;
        }
        /*implement the relative recursion relation - does any subsum match the
         * deisred number*/

        for (skip_count = 0; skip_count < thelist->len; ++skip_count) {
            struct int_list newlist;
            long count;
            intlist_init(&newlist);
            for (count = 0; count < thelist->len; ++count) {
                if (count != skip_count) {
                    if (!intlist_add(&newlist,
                                     get_intlist_element(thelist, count))) {
                        return FALSE;
                    }
                }
            }
            if (matching_sum(&newlist, desired_sum)) {
                return TRUE;
            }
        }
        return FALSE;
    }

    return EXIT_SUCCESS;
}
