/*
 1
 2 3
 4 5 6
 7 8 9 1

*/
#include<stdio.h>
int main()

{
		int i=1,j,count=1,n;
		
		printf("Enter the Any numbres:");
		scanf("%d",&n);
		
		for(i=1;i<=n;i++)
		{
				for(j=1;j<=i;j++)
				{
					printf("%d\t",count);
					count++;
				}
				printf("\n");
		}
}
