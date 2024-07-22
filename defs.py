import random
import re
def getUrl(string):
    regex = r"(?i)\b((?:https?://|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:'\".,<>?«»“”‘’]))"
    url = re.findall(regex,string) 
    if not url: return None     
    return [x[0] for x in url]

def getcards(text: str):
    text = text.replace('\n', ' ').replace('\r', '')
    cards = []
    card_details = re.findall(r"[0-9]+", text)
    for i in range(len(card_details) - 3):
        card = card_details[i:i+4]
        if len(card) < 3:
            continue
        if len(card) == 3:
            cc = card[0]
            if len(card[1]) == 3:
                mes = card[2][:2]
                ano = card[2][2:]
                cvv = card[1]
            else:
                mes = card[1][:2]
                ano = card[1][2:]
                cvv = card[2]
        else:
            cc = card[0]
            if len(card[1]) == 3:
                mes = card[2]
                ano = card[3]
                cvv = card[1]
            else:
                mes = card[1]
                ano = card[2]
                cvv = card[3]
            if len(mes) == 2 and (mes > '12' or mes < '01'):
                ano1 = mes
                mes = ano
                ano = ano1
        if cc[0] == '3' and len(cc) != 15 or len(cc) != 16 or int(cc[0]) not in [3,4,5,6]:
            continue
        if len(mes) not in [2 , 4] or len(mes) == 2 and (mes > '12' or mes < '01'):
            continue
        if len(ano) not in [2,4] or len(ano) == 2 and (ano < '21' or ano > '29') or len(ano) == 4 and (ano < '2021' or ano > '2029'):
            continue
        if cc[0] == '3' and len(cvv) != 4 or len(cvv) != 3:
            continue
        if cc and mes and ano and cvv:
            cards.append((cc, mes, ano, cvv))
    return cards


def phone():
        first = str(random.randint(100, 999))
        second = str(random.randint(1, 888)).zfill(3)
        last = (str(random.randint(1, 9998)).zfill(4))
        while last in ['1111', '2222', '3333', '4444', '5555', '6666', '7777', '8888']:
            last = (str(random.randint(1, 9998)).zfill(4))
        return '{}{}{}'.format(first, second, last)
from datetime import datetime
import random