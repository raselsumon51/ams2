#include<bits/stdc++.h>
#include <iostream>
#include <string>
using namespace std;
#include<bits/stdc++.h>
 //booast library c++
#include <boost/multiprecision/cpp_int.hpp>





int main()
{       
    int t,l=0,u=0,d=0,x=0;

    string s;
    cin >> t;
    while (t--)
    {
        cin >> s;
        for(int i=0;i<s.size();i++)
        {
            if(islower(s[i]))
            {
                l=1;
            }
           if(isupper(s[i]) && i!=0 && i!=(s.size()-1) )
            {
                u=1;
            }
            if(isdigit(s[i]) && i!=0 && i!=(s.size()-1))
            {
                d=1;
            }
            if( (s[i]=='@' || s[i]=='#' || s[i] =='%' || s[i]=='&' || s[i]=='?') && i!=0 && i!=(s.size()-1) && x==0)
            {
                x=1;
            }
        }
    
    if(l==1 && u==1 && d==1 && x==1 && s.size()>=10)
        cout << "YES" << endl;
    else
        cout << "NO" << endl;

        l=0,u=0,d=0,x=0;
    }
}  
    

