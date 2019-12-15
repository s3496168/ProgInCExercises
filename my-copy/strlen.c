int strlen(char * s, int len);
int main(void)
{
    int num = 65;
    int len = strlen((char*)&num, num);
    printf("%d\n", len);
    return 0;
}
