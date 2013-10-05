import math

def CSD(s):
    if s is 'a' : return 0
    if s is 'b' : return 1
    if s is 'c' : return 2
    if s is 'd' : return 3
    if s is 'e' : return 4
    if s is 'f' : return 5
    if s is 'g' : return 6
    if s is 'h' : return 7
    if s is 'i' : return 8
    if s is 'j' : return 9
    if s is 'k' : return 10
    if s is 'l' : return 11
    if s is 'm' : return 12
    if s is 'n' : return 13
    if s is 'o' : return 14
    if s is 'p' : return 15
    if s is 'q' : return 16
    if s is 'r' : return 17
    if s is 's' : return 18
    if s is 't' : return 19
    if s is 'u' : return 20
    if s is 'v' : return 21
    if s is 'x' : return 22
    if s is 'y' : return 23
    if s is 'z' : return 24
    if s is 'w' : return 25
    if s is ' ' or s is '_' : return 26

def SCD(x):
    if x==0 : return 'a'
    if x==1 : return 'b'
    if x==2 : return 'c'
    if x==3 : return 'd'
    if x==4 : return 'e'
    if x==5 : return 'f'
    if x==6 : return 'g'
    if x==7 : return 'h'
    if x==8 : return 'i'
    if x==9 : return 'j'
    if x==10 : return 'k'
    if x==11 : return 'l'
    if x==12 : return 'm'
    if x==13 : return 'n'
    if x==14 : return 'o'
    if x==15 : return 'p'
    if x==16 : return 'q'
    if x==17 : return 'r'
    if x==18 : return 's'
    if x==19 : return 't'
    if x==20 : return 'u'
    if x==21 : return 'v'
    if x==22 : return 'x'
    if x==23 : return 'y'
    if x==24 : return 'z'
    if x==25 : return 'w'
    if x==26 : return '_'

def roso(s):
    b = [None]
    for i in s:
        b.append(CSD(i))
    del b[0]
    return b

def maso(x,k):
    b = [x[0]]
    for i in x:
        b.append(i)
    del b[0]

    i=0
    while i<len(b):
        b[i] = (b[i] + k)%27
        i = i +1
    return b

def machu(x):
    kq = [0]

    i=0
    while i<len(x):
        kq.append(SCD(x[i]))
        i = i +1
    del kq[0]

    j=0
    st=''
    while j<len(x):
        st = st + SCD(x[j])
        j = j +1
    
    return st

def main():
    print("\nnhap du lieu ma hoa :")
    a = raw_input()     # ro chu
#    print roso(a)           # ro so
    k = 5                   # khoa k
    kqmaso = maso(roso(a),k)   # ma so
#    print kqmaso
    print("\nket qua ma hoa :")
    print machu(kqmaso)
main()

