#include "list.h"
#include <assert.h>
struct list* list_make(void) {
    struct list* thelist = (struct list*)malloc(sizeof(struct list));
    if (!thelist) {
        perror("malloc");
        return NULL;
    }
    thelist->head = NULL;
    thelist->size = 0;

    memset(thelist, 0, sizeof(struct list));
    return thelist;
}

BOOLEAN list_add(struct list* thelist, struct person* newperson) {
    struct node* current, *prev = NULL;
    struct node* new = malloc(sizeof(struct node));
    if (!new) {
        perror("malloc");
        return FALSE;
    }
    new->data = newperson;
    new->next =
        NULL; /* dealing with the case when the new node will be at the end of
                 the list */
    /* empty list */
    if (thelist->size == 0) {
        thelist->head = new;
        ++thelist->size;
        return TRUE;
    }
    /* find position */
    for (current = thelist->head;
         current != NULL && person_cmp(current->data, newperson) < 0;
         prev = current, current = current->next)
        /* no work in the loop itself */
        ;
    /* do insertion */
    if (current == NULL) {
        assert(prev != NULL);
        prev->next = new;
    } else {
        if (!prev) {
            new->next = thelist->head;
            thelist->head = new;
        } else {
            prev->next = new;
        }
        new->next = current;
    }
    ++thelist->size;
    return TRUE;
}

static int person_rem_cmp(struct person* aperson, char needle[]) {
    return strcmp(aperson->lname, needle);
}

struct person* list_remove(struct list* thelist, char lastname[]) {
    struct node* current, *prev = NULL;
    struct person* result = NULL;
    if (thelist->size == 0) {
        fprintf(stderr, "The list is already empty when running %s.\n",
                __PRETTY_FUNCTION__);
        return NULL;
    }
    /* locate the element to remove */
    for (current = thelist->head;
         current != NULL && person_rem_cmp(current->data, lastname) < 0;
         prev = current, current = current->next)
        /* no work to do in the body */
        ;
    /* remove the element */
    if (prev == NULL) {
        thelist->head = current->next;
    } else {
        prev->next = current->next;
    }
    result = current->data;
    free(current);
    --thelist->size;
    return result;
}

void list_destroy(struct list* thelist) {
    /* anything taht is a return value from malloc and related functions must be
     * freed */
    struct node* current, *next;
    for (current = thelist->head; current; current = next) {
        free(current->data);
        next = current->next;
        free(current);
    }
    free(thelist);
}
