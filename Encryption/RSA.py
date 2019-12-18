import math
import time
import random

def isprime(num):
    if num == 1: return False
    sqrtnum = int(math.sqrt(num))
    for i in range(2, sqrtnum + 1):
        if num % i == 0:
            return False
    return True


def gcd(a, b):
    while b != 0:
        a, b = b, a % b
    return a


def encrypt(public, P):
    key, n = public
    cipher = [(ord(char) ** key) % n for char in P]
    return cipher


def decrypt(private, C):
    key, n = private
    plain = ""
    for char in C:
        plain += chr((char ** key) % n)
    return plain


def gen_public(tot):
    e = tot - 1
    while e > 1 and gcd(e, tot) != 1:
        e -= 1
    return e


def gen_private(e, tot):
    k = 1
    while (e * k) % tot != 1 or k == e:
        k += 1
    return k


def gen_twoprime():
    random.seed(time.time())
    while True:
        p, q = random.randint(11, 1000), random.randint(13, 1000)
        if isprime(p) and isprime(q) and p != q:
            break
    return p, q


if __name__ == '__main__':
    m = input("암호화할 평문을 입력하세요 : ")
    p, q = gen_twoprime()

    n = p * q
    totient = (p - 1) * (q - 1)
    e = gen_public(totient)
    d = gen_private(e, totient)
    encrypted = encrypt((e, n), m)
    decrypted = decrypt((d, n), encrypted)

    print("p, q :", p, ",", q)
    print("n :\t", n)
    print("φ(n) :", totient)
    print("n, e (공개키):\t(" + str(n) + "," + str(e) + ")")
    print("d (개인키):\t", d)
    print('Encrypted:\t\t', "".join(map(lambda x: str(x), encrypted)))
    print('Decrypted:\t\t', decrypted)

    if m == decrypted:
        print("평문과 복호문이 같습니다.")
    else:
        print("평문과 복호문이 다릅니다.")
