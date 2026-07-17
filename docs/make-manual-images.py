#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""WordPress管理画面を模した、マニュアル用の説明画像を生成する。"""
from PIL import Image, ImageDraw, ImageFont
import os

OUT = "/Users/shun/Web制作事業/AI制作/maw-seed/docs/manual-images"
os.makedirs(OUT, exist_ok=True)

# WP admin配色
BG = (240, 240, 241)        # 管理画面背景
SIDEBAR = (29, 35, 39)      # 左メニュー
SIDEBAR_TXT = (240, 246, 252)
SIDEBAR_SUB = (28, 130, 175)  # 選択中メニュー背景(青)
WHITE = (255, 255, 255)
BORDER = (220, 220, 222)
TEXT = (30, 30, 30)
GRAY = (117, 117, 117)
BLUE = (56, 88, 233)        # Gutenberg公開ボタン
ADMIN_BLUE = (34, 113, 177)
RED = (229, 72, 77)         # 注釈色
GREEN = (0, 163, 42)

def font(size, bold=False):
    paths = [
        ("/System/Library/Fonts/ヒラギノ角ゴシック W6.ttc", 0) if bold else ("/System/Library/Fonts/ヒラギノ角ゴシック W3.ttc", 0),
        ("/System/Library/Fonts/ヒラギノ丸ゴ ProN W4.ttc", 0),
        ("/System/Library/Fonts/Hiragino Sans GB.ttc", 1 if bold else 0),
    ]
    for p, idx in paths:
        try:
            return ImageFont.truetype(p, size, index=idx)
        except Exception:
            continue
    return ImageFont.load_default()

def rounded(d, box, radius, fill=None, outline=None, width=1):
    d.rounded_rectangle(box, radius=radius, fill=fill, outline=outline, width=width)

def annotate(d, xy, num, r=26):
    """赤丸数字の注釈"""
    x, y = xy
    d.ellipse([x-r, y-r, x+r, y+r], fill=RED, outline=WHITE, width=4)
    f = font(30, bold=True)
    t = str(num)
    bb = d.textbbox((0,0), t, font=f)
    d.text((x-(bb[2]-bb[0])/2-bb[0], y-(bb[3]-bb[1])/2-bb[1]), t, font=f, fill=WHITE)

def highlight(d, box, r=10):
    """赤枠ハイライト"""
    d.rounded_rectangle(box, radius=r, outline=RED, width=5)

def field(d, box, label=None, value="", placeholder=False):
    rounded(d, box, 6, fill=WHITE, outline=(160,160,160), width=2)
    if value:
        d.text((box[0]+16, (box[1]+box[3])//2-14), value,
               font=font(26), fill=GRAY if placeholder else TEXT)

def topbar(d, W, title="株式会社ミュウシード"):
    d.rectangle([0,0,W,44], fill=SIDEBAR)
    d.text((18,10), title, font=font(22), fill=SIDEBAR_TXT)
    d.text((W-260,10), "こんにちは、mew-seed さん", font=font(20), fill=(190,195,200))

MENU = ["ダッシュボード","投稿","メディア","固定ページ","コメント","お問い合わせ","外観","プラグイン","ユーザー","ツール","設定"]

def sidebar(d, H, active=None, submenu=None):
    d.rectangle([0,44,240,H], fill=SIDEBAR)
    y = 70
    for m in MENU:
        if m == active:
            d.rectangle([0,y-8,240,y+34], fill=SIDEBAR_SUB)
            d.text((24,y), m, font=font(24, bold=True), fill=WHITE)
            y += 42
            if submenu:
                for s, sel in submenu:
                    color = WHITE if sel else (170,200,220)
                    prefix = "▶ " if sel else "   "
                    d.text((40,y), prefix+s, font=font(22, bold=sel), fill=color)
                    y += 36
                y += 6
        else:
            d.text((24,y), m, font=font(24), fill=SIDEBAR_TXT)
            y += 42

# =====================================================
# 1. ログイン画面
# =====================================================
W,H = 1440,1000
img = Image.new("RGB",(W,H),(243,243,246)); d = ImageDraw.Draw(img)
cx = W//2
d.ellipse([cx-40,60,cx+40,140], outline=(70,80,90), width=6)
d.text((cx-16,78), "W", font=font(52, bold=True), fill=(70,80,90))
box = [cx-260,180,cx+260,880]
rounded(d, box, 8, fill=WHITE, outline=BORDER, width=2)
x0 = cx-210
d.text((x0,220), "ユーザー名またはメールアドレス", font=font(24), fill=TEXT)
field(d, [x0,260,cx+210,318], value="mew-seed")
annotate(d, (cx+250, 289), 1)
d.text((x0,350), "パスワード", font=font(24), fill=TEXT)
field(d, [x0,390,cx+210,448], value="●●●●●●●●●●")
annotate(d, (cx+250, 419), 2)
# SiteGuard ひらがな画像認証
d.text((x0,486), "画像認証", font=font(24), fill=TEXT)
rounded(d, [x0,526,x0+200,596], 6, fill=(250,250,240), outline=(160,160,160), width=2)
d.text((x0+34,546), "ぬ る め き", font=font(30, bold=True), fill=(90,90,140))
field(d, [x0+220,526,cx+210,596], value="ひらがなを入力", placeholder=True)
annotate(d, (cx+250, 561), 3)
d.text((x0,614), "↑ 左の画像に表示されている「ひらがな」をそのまま入力します", font=font(20), fill=GRAY)
# ログイン状態を保存 + ボタン
d.rectangle([x0,676,x0+26,702], outline=(160,160,160), width=2)
d.text((x0+40,676), "ログイン状態を保存する", font=font(22), fill=TEXT)
rounded(d, [x0,740,cx+210,810], 8, fill=ADMIN_BLUE)
d.text((cx-60,760), "ログイン", font=font(28, bold=True), fill=WHITE)
annotate(d, (cx+250, 775), 4)
img.save(f"{OUT}/01-login.png")

# =====================================================
# 2. ダッシュボード → 投稿 > 新規投稿を追加
# =====================================================
W,H = 1440,900
img = Image.new("RGB",(W,H),BG); d = ImageDraw.Draw(img)
topbar(d,W)
sidebar(d,H, active="投稿", submenu=[("投稿一覧",False),("新規投稿を追加",True),("カテゴリー",False)])
d.text((290,90), "ダッシュボード", font=font(36, bold=True), fill=TEXT)
rounded(d, [290,160,1380,420], 8, fill=WHITE, outline=BORDER, width=2)
d.text((320,190), "概要", font=font(26, bold=True), fill=TEXT)
d.text((320,240), "2件の投稿　11件の固定ページ", font=font(24), fill=GRAY)
d.text((320,285), "WordPress 6.9.1（Maw Seed テーマ）", font=font(24), fill=GRAY)
annotate(d, (200, 126), 1)   # 投稿メニュー
annotate(d, (272, 200), 2)  # 新規投稿を追加（枠外右）
highlight(d, [30, 176, 240, 218], r=8)
img.save(f"{OUT}/02-menu.png")

# =====================================================
# 3. エディタ: タイトルと本文
# =====================================================
W,H = 1440,900
img = Image.new("RGB",(W,H),WHITE); d = ImageDraw.Draw(img)
# 上部バー（Gutenberg）
d.rectangle([0,0,W,64], fill=WHITE); d.line([0,64,W,64], fill=BORDER, width=2)
d.rectangle([0,0,64,64], fill=(30,30,30))
d.text((20,14), "W", font=font(30, bold=True), fill=WHITE)
d.text((84,18), "＋", font=font(30, bold=True), fill=ADMIN_BLUE)
d.text((W-380,18), "下書き保存", font=font(24), fill=ADMIN_BLUE)
rounded(d, [W-160,12,W-24,52], 6, fill=BLUE)
d.text((W-128,20), "公開", font=font(24, bold=True), fill=WHITE)
# タイトル
d.text((280,160), "スタッフ研修を行いました", font=font(48, bold=True), fill=TEXT)
d.line([280,225,1160,225], fill=(235,235,235), width=1)
annotate(d, (240,185), 1)
# 本文
d.text((280,280), "本日、夢み寮 東七松にて新人スタッフ向けの研修を行いました。", font=font(26), fill=TEXT)
d.text((280,330), "介護の基本から接遇マナーまで、先輩スタッフが丁寧に指導しました。", font=font(26), fill=TEXT)
annotate(d, (240,305), 2)
d.text((280,420), "ブロックを選択するには「/」を入力", font=font(26), fill=(160,160,160))
# +ボタン
rounded(d, [280,470,324,514], 6, fill=(30,30,30))
d.text((292,476), "＋", font=font(30, bold=True), fill=WHITE)
annotate(d, (360,492), 3)
d.text((400,478), "← この「＋」ボタンから写真を追加できます（次のページで説明）", font=font(22), fill=GRAY)
img.save(f"{OUT}/03-editor.png")

# =====================================================
# 4. 画像の挿入
# =====================================================
W,H = 1440,900
img = Image.new("RGB",(W,H),WHITE); d = ImageDraw.Draw(img)
d.rectangle([0,0,W,64], fill=WHITE); d.line([0,64,W,64], fill=BORDER, width=2)
d.rectangle([0,0,64,64], fill=(30,30,30)); d.text((20,14), "W", font=font(30, bold=True), fill=WHITE)
# +ボタン押下後のポップアップ
rounded(d, [280,120,324,164], 6, fill=(30,30,30))
d.text((292,126), "＋", font=font(30, bold=True), fill=WHITE)
annotate(d, (250,142), 1)
rounded(d, [340,120,760,560], 10, fill=WHITE, outline=(190,190,190), width=2)
field(d, [364,144,736,196], value="検索", placeholder=True)
items = [("段落",False),("画像",True),("見出し",False),("リスト",False),("引用",False)]
y = 220
for label, sel in items:
    if sel:
        rounded(d, [356,y-6,744,y+44], 8, fill=(232,240,254), outline=ADMIN_BLUE, width=2)
        d.text((380,y), label, font=font(26, bold=True), fill=ADMIN_BLUE)
        annotate(d, (720,y+18), 2)
    else:
        d.text((380,y), label, font=font(26), fill=TEXT)
    y += 62
# 画像ブロックのアップロードUI
rounded(d, [820,180,1380,520], 10, fill=(249,249,249), outline=(190,190,190), width=2)
d.text((850,210), "画像ブロック", font=font(26, bold=True), fill=TEXT)
rounded(d, [850,270,1090,330], 8, fill=BLUE)
d.text((890,286), "アップロード", font=font(24, bold=True), fill=WHITE)
annotate(d, (1120,300), 3)
rounded(d, [850,350,1130,410], 8, fill=WHITE, outline=ADMIN_BLUE, width=2)
d.text((880,366), "メディアライブラリ", font=font(24), fill=ADMIN_BLUE)
d.text((850,440), "「アップロード」→ パソコン内の写真を選ぶだけでOKです", font=font(22), fill=GRAY)
img.save(f"{OUT}/04-image.png")

# =====================================================
# 5. カテゴリーとアイキャッチ（右パネル）
# =====================================================
W,H = 1440,940
img = Image.new("RGB",(W,H),WHITE); d = ImageDraw.Draw(img)
d.rectangle([0,0,W,64], fill=WHITE); d.line([0,64,W,64], fill=BORDER, width=2)
d.rectangle([0,0,64,64], fill=(30,30,30)); d.text((20,14), "W", font=font(30, bold=True), fill=WHITE)
rounded(d, [W-560,10,W-480,54], 6, fill=WHITE, outline=(160,160,160), width=2)
d.line([W-548,24,W-492,24], fill=TEXT, width=3)
d.line([W-548,40,W-492,40], fill=TEXT, width=3)
d.ellipse([W-538,18,W-526,30], fill=TEXT)
d.ellipse([W-516,34,W-504,46], fill=TEXT)
annotate(d, (W-590,32), 1)
d.text((120,200), "（本文の編集エリア）", font=font(26), fill=(200,200,200))
# 右パネル
px = W-460
d.rectangle([px,64,W,H], fill=(252,252,252)); d.line([px,64,px,H], fill=BORDER, width=2)
d.text((px+30,84), "投稿", font=font(26, bold=True), fill=TEXT)
d.text((px+150,84), "ブロック", font=font(26), fill=GRAY)
d.line([px+30,124,px+110,124], fill=BLUE, width=4)
# ステータス
d.text((px+30,160), "概要", font=font(24, bold=True), fill=TEXT)
d.text((px+30,204), "表示状態： 公開", font=font(22), fill=GRAY)
d.text((px+30,240), "公開： 今すぐ", font=font(22), fill=GRAY)
d.line([px+20,290,W-20,290], fill=BORDER, width=1)
# カテゴリー
d.text((px+30,310), "カテゴリー", font=font(24, bold=True), fill=TEXT)
cats = [("お知らせ",False),("イベント",False),("ブログ",True),("採用ブログ",False)]
y = 356
for name, sel in cats:
    d.rectangle([px+34,y,px+60,y+26], outline=(140,140,140), width=2,
                fill=ADMIN_BLUE if sel else WHITE)
    if sel:
        d.text((px+37,y-2), "✓", font=font(22, bold=True), fill=WHITE)
    d.text((px+74,y-2), name, font=font(24), fill=TEXT)
    y += 44
annotate(d, (px+240,400), 2)
highlight(d, [px+24,346,px+280,530], r=8)
d.line([px+20,560,W-20,560], fill=BORDER, width=1)
# アイキャッチ
d.text((px+30,580), "アイキャッチ画像", font=font(24, bold=True), fill=TEXT)
rounded(d, [px+30,624,W-40,724], 8, fill=(240,240,240), outline=(180,180,180), width=2)
d.text((px+60,662), "アイキャッチ画像を設定", font=font(22), fill=ADMIN_BLUE)
annotate(d, (W-70,674), 3)
d.text((px+30,744), "※設定しなくてもOK！", font=font(22, bold=True), fill=GREEN)
d.text((px+30,780), "　未設定なら「夢み寮」デザインの", font=font(20), fill=GRAY)
d.text((px+30,810), "　画像が自動で表示されます", font=font(20), fill=GRAY)
img.save(f"{OUT}/05-category.png")

# =====================================================
# 6. 公開（2回押す）
# =====================================================
W,H = 1440,760
img = Image.new("RGB",(W,H),WHITE); d = ImageDraw.Draw(img)
d.rectangle([0,0,W,64], fill=WHITE); d.line([0,64,W,64], fill=BORDER, width=2)
d.rectangle([0,0,64,64], fill=(30,30,30)); d.text((20,14), "W", font=font(30, bold=True), fill=WHITE)
rounded(d, [W-160,12,W-24,52], 6, fill=BLUE)
d.text((W-128,20), "公開", font=font(24, bold=True), fill=WHITE)
annotate(d, (W-190,32), 1)
# 確認パネル
px = W-480
d.rectangle([px,64,W,H], fill=(252,252,252)); d.line([px,64,px,H], fill=BORDER, width=2)
d.text((px+30,100), "公開してもよいですか ?", font=font(28, bold=True), fill=TEXT)
d.text((px+30,150), "公開する前に、設定を再確認しましょう。", font=font(20), fill=GRAY)
rounded(d, [px+30,220,px+200,278], 8, fill=BLUE)
d.text((px+68,236), "公開", font=font(24, bold=True), fill=WHITE)
annotate(d, (px+240,249), 2)
d.text((px+30,320), "↑ もう一度「公開」ボタンを押すと", font=font(22), fill=TEXT)
d.text((px+30,354), "　 記事がサイトに公開されます", font=font(22), fill=TEXT)
# 完了メッセージ
rounded(d, [px+30,430,W-30,560], 10, fill=(237,247,237), outline=GREEN, width=2)
d.text((px+50,452), "✓ 公開しました！", font=font(26, bold=True), fill=GREEN)
d.text((px+50,500), "「投稿を表示」を押すと", font=font(20), fill=TEXT)
d.text((px+50,528), "公開された記事を確認できます", font=font(20), fill=TEXT)
img.save(f"{OUT}/06-publish.png")

# =====================================================
# 7. 記事の修正・削除（投稿一覧）
# =====================================================
W,H = 1440,800
img = Image.new("RGB",(W,H),BG); d = ImageDraw.Draw(img)
topbar(d,W)
sidebar(d,H, active="投稿", submenu=[("投稿一覧",True),("新規投稿を追加",False),("カテゴリー",False)])
d.text((290,90), "投稿一覧", font=font(36, bold=True), fill=TEXT)
rounded(d, [290,170,1380,700], 8, fill=WHITE, outline=BORDER, width=2)
d.line([290,240,1380,240], fill=BORDER, width=2)
d.text((330,196), "タイトル", font=font(22, bold=True), fill=GRAY)
d.text((900,196), "カテゴリー", font=font(22, bold=True), fill=GRAY)
d.text((1150,196), "日付", font=font(22, bold=True), fill=GRAY)
rows = [
    ("スタッフ研修を行いました", "ブログ", "2026.07.20", True),
    ("採用ページをリニューアルしました", "採用ブログ", "2026.07.16", False),
    ("ホームページをリニューアルしました", "お知らせ", "2026.07.16", False),
]
y = 270
for title, cat, date, hover in rows:
    d.text((330,y), title, font=font(24, bold=True), fill=ADMIN_BLUE)
    d.text((900,y), cat, font=font(22), fill=TEXT)
    d.text((1150,y), date, font=font(22), fill=GRAY)
    if hover:
        d.text((330,y+40), "編集     クイック編集     ゴミ箱へ移動     表示", font=font(20), fill=ADMIN_BLUE)
        annotate(d, (300,y+52), 1)
        highlight(d, [322,y+32,420,y+72], r=6)
        d.text((470,y+90), "↑ タイトルにマウスを乗せると出てくる「編集」で修正、「ゴミ箱へ移動」で削除", font=font(20), fill=GRAY)
        y += 140
    else:
        y += 90
img.save(f"{OUT}/07-edit.png")

print("生成完了:")
for f_ in sorted(os.listdir(OUT)):
    print(" ", f_)
