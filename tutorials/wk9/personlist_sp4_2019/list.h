#include "person.h"
#ifndef LIST_H
#define LIST_H

typedef enum {
    FALSE,
    TRUE
} BOOLEAN;

struct node {
    struct node* next;
    struct void* data;
};

struct list {
    struct node* head;
    int size;
};

struct list* list_make(void);
BOOLEAN list_add(struct list*, struct void*);
struct person* list_remove(struct list*, char[]);
/*not done yet*/
void list_destroy(struct list*);
#endif
