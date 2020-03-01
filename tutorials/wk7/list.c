#include "list.h"

/*use non zero value to determine the order of the balance*/
int typecmp(type *first, type *second) {
    int cmp = first->balance.dollars - second->balance.dollars;
    if (cmp != 0) {
        return cmp;
    }
    return first->balance.cents - second->balance.cents;
}

/*old functions with different names*/
/*
BOOLEAN list_init(struct list * list)
{
        return FALSE;
}

BOOLEAN list_add(struct list * list, struct account account)
{
        return FALSE;
}

BOOLEAN list_del(struct list * list, char accno[])
{
        return FALSE;
}

void list_free(struct list * list)
{
}
*/

/*storage-name of struct added for clarity*/
/*also make sure stdlib is included for malloc-otherwise struct may get
 * converted to an int and may corrupt*/
struct array_list *array_list_make() {
    struct array_list *list =
        (struct array_list *)malloc(sizeof(struct array_list));

    if (!list) {
        /*perror takes any string passed and uses a error message
         provided by a * table within the
         system with the string */
        perror("malloc");
        return NULL;
    }

    list->array = (type **)malloc(sizeof(type) * MIN_LIST_SIZE);
    list->size = 0;
    list->capacity = MIN_LIST_SIZE;
}

void array_list_init(struct array_list *thelist) {}

/*add to the list-note the type * permits changing of types
 * so long as the #define is changed too*/
/*Boolean used to account for failure*/

/*sort by balance-ensure higher values come earlier*/
BOOLEAN array_list_add(struct array_list *thelist, type *val) {
    int count, back_count;
    if (thelist->size == 0) {
        thelist->array[thelist->size++] = val;
        return TRUE;
    }
    /*reallocation of space if at capacity*/
    if (thelist->size == thelist->capacity) {
        void *test = realloc(thelist->array, DOUBLE(thelist->size));
        if (test) {
            thelist->array = test;
            thelist->capacity = DOUBLE(thelist->size);
        } else {
            perror("realloc");
            return FALSE;
        }
    }
    /*find the insertion point with balance int above*/
    for (count = 0;
         count < thelist->size && typecmp(thelist->array[count], val) < 0;
         ++count)
        /*no body required*/
        ;

    /*ensure that previous entries are moved down a spot and therefore are not
     * wiped by new entry*/
    /*Make sure tge loop itinerates backwards*/
    for (back_count = thelist->size; back_count > count; --back_count) {
        thelist->array[back_count] = thelist->array[back_count - 1];
    }
    thelist->array[count] = val;
    thelist->size++;
}

/*remove from the list-note const char[] used as it is not known what is
 * to be removed yet*/
/*Boolean used to account for failure*/
BOOLEAN array_list_remove(struct array_list *thelist, const char key[]) {

    int count, back_count;
    if (thelist->size == 0) {
        /*   thelist->array[thelist->size--] = key;*/
        return FALSE;
    }

    /*ensure that previous entries are moved down a spot and therefore
         * are not wiped by new entry*/
    /*Make sure the loop itinerates backwards*/
    for (count = 0; count < thelist->size; ++count) {
        if (is_owner(&thelist->array[count], key)) {
            int del_count;
            for (del_count = count; del_count < thelist->size; ++del_count) {
                thelist->array[del_count] = thelist->array[del_count + 1];
            }

            --thelist->size;
            return TRUE;
        }
    }

    return FALSE;

} /*remove from the list-note const char[] used as it is not known what is
     * to be removed yet*/

/*disposal-void used here asthere should be nothing to return*/
void array_list_free(struct array_list *thelist) {}
