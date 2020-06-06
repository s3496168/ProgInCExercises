#include <stdlib.h>
#include <stdio.h>

struct int_list_node {
    int data;
    struct node* next;
};
struct int_list {
    int size;
    struct int_list_node* head;
};
typedef enum {
    FALSE,
    TRUE
} BOOLEAN;
BOOLEAN int_list_add(struct int_list* list, int data) {
    struct int_list_node* new;
    struct int_list_node* current, *prev = NULL; /*prev should be set to NULL*/
    new = malloc(sizeof(struct int_list_node));
    if (!new) {
        return FALSE;
    }
    new->next = NULL;
    new->data = data;
    current = list->head;
    /*Missing test to see if the list is empty-if the list is empty a new
     * node should be assigned*/
    if (list->head == NULL) {
        list->head = new;
        /*increment the size of the list*/
        ++list->size;
        /*end of test*/
        return TRUE;
    }
    /*end of missing test*/

    while (current != NULL && current->data < data) {
        prev = current;
        current = current->next;
    }
    if (!current) {
        prev->next = new;
    } else if (!prev) {
        new->next = list->head;
        list->head = new;
    } else {
        prev->next = new;
        new->next = current;
    }
    ++list->size;
    return TRUE;
}
