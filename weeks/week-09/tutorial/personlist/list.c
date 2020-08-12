#include "list.h"

#include <assert.h>
#include <stdlib.h>
#include <string.h>
#include <stdio.h>

void list_init(struct list *thelist) {
    assert(thelist);
    thelist->head = NULL;
    thelist->count = 0;

    /*instead */
    memset(thelist, 0, sizeof(struct list));
}

BOOLEAN list_add(struct list *thelist, const struct person *newperson) {
    struct node *new = (struct node *)malloc(sizeof(struct node));
    struct node *current, *prev = NULL;
    if (!new) {
        perror("malloc");
        return FALSE;
    }
    new->theperson = *newperson;
    new->next = NULL;
    /* current = thelist->head; */
    /* while (current) { */
    /*     current = current->next; */
    /* } */
    for (current = thelist->head; current;
         prev = current, current = current->next) {
        if (strcmp(current->theperson.lname, newperson->theperson.lname) < 0) {
            break;
        }
    }
    if (current) {
        if (prev) {
            prev->next = new;
            new->next = current;
        } else {
            new->next = thelist->head;
            thelist->head = new;
        }
    } else {
        if (prev) {
            prev->next = new;
        } else {
            thelist->head = new;
        }
    }
    ++thelist->count;
    return TRUE;
}

BOOLEAN list_del(struct list *thelist, const char firstname[], const char lastname[]){
    struct node *curr, prev = NULL;
    assert(thelist);
    assert(firstname);
    assert(lastname);

    if(thelist->count == 0){
        fprintf(stderr, "Error: can't delete from an empty list\n");
    }
    curr = thelist->head;
    /* search for item to delete*/
    while(curr && person_del_cmp(&curr->theperson, firstname, lastname)!=0){
        prev = curr;
        curr = curr ->next;
    }
    if(!curr){
        /* insert error message about not being found */
        return FALSE;
    } 
    if(!prev){
        thelist->head = thelist->head->next;
    }else {
        prev->next = current->next;
    }
    free(curr);
    --thelist->count;
    return FALSE;
    
}
void list_free(struct list *){
    struct node *current;
    while (current){
        struct node *next = current->next;
            struct node *next = current->next;
            free(current);
            cerrent = next;
        
    }
}