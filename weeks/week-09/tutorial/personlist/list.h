#ifndef LIST_H
#define LIST_H
#define NAMELEN 40

typedef enum { FALSE, TRUE } BOOLEAN;
struct person {
    char fname[NAMELEN + 1];
    char lname[NAMELEN + 1];
    int age;
};

struct node {
    struct node *next;
    struct person theperson;
};

struct list {
    struct node *head;
    long count;
};

void list_init(struct list *);
BOOLEAN list_add(struct list *, const struct person *);
BOOLEAN list_del(struct list *, const char[], const char[]);
void list_free(struct list *);
#endif
