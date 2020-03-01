#include <stdlib.h>
#include <assert.h>
#include <stdio.h>
#include "account.h"
#include "bool.h"
#ifndef LIST_H
struct list;
#define LIST_H
#define MIN_LIST_SIZE 10
#define DOUBLE(X) ((X) * (X))

/*tip: type 'man free 3' to see the malloc menu*/
/*typedef to make structs generic*/
typedef struct account type;

/*resizeable arrayList*/
struct array_list {
    /*'**' to store addresses*/
    type **array;
    int size;
    int capacity;
};

/*storage*/
struct array_list *array_list_make();

void array_list_init(struct array_list *);

/*add to the list-note the type * permits changing of types
 * so long as the #define is changed too*/
/*Boolean used to account for failure*/
BOOLEAN array_list_add(struct array_list *, type *);

/*remove from the list-note const char[] used as it is not known what is
 * to be removed yet*/
/*Boolean used to account for failure*/
BOOLEAN array_list_remove(struct array_list *, const char[]);

/*disposal-void used here asthere should be nothing to return*/ void
    array_list_free(struct array_list *);
#endif
