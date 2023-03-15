import tkinter as tk
import time
import os
import subprocess

class ClickCounter:
    def __init__(self, master):
        self.master = master
        self.master.title("Click Counter")
        self.counts = [0, 0, 0, 0]
        self.start_time = time.time()
        self.create_widgets()
        def create_widgets(self):
                button_frame = tk.Frame(self.master)
                button_frame.pack(pady=10)
        
        # Snake button
        snake_button = tk.Button(button_frame, text="Snake", width=10, height=2,
                                 font=("Helvetica", 14, "bold"),
                                 command=lambda: self.on_button_click(0, "F:\Project\Game\snake.py"))
        snake_button.grid(row=0, column=0, padx=5, pady=5)
        
        # Brick button
        brick_button = tk.Button(button_frame, text="Brick", width=10, height=2,
                                 font=("Helvetica", 14, "bold"),
                                 command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\brick.py']))
        brick_button.grid(row=0, column=1, padx=5, pady=5)
        
        # Tic Tac Toe button
        tic_button = tk.Button(button_frame, text="Tic Tac Toe", width=10, height=2,
                               font=("Helvetica", 14, "bold"),
                               command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\tic.py']))
        tic_button.grid(row=1, column=0, padx=5, pady=5)
        
        # Number button
        number_button = tk.Button(button_frame, text="Number", width=10, height=2,
                                  font=("Helvetica", 14, "bold"),
                                  command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\number.py']))
        number_button.grid(row=1, column=1, padx=5, pady=5)





# Create a Tkinter window

root = tk.Tk()

root.title("Game Panel")


# Configure the window to fit the screen
screen_width = root.winfo_screenwidth()
screen_height = root.winfo_screenheight()
root.geometry(f"{screen_width}x{screen_height}+0+0")

# Create a brown frame to fill the window
brown_frame = tk.Frame(root, bg="#8B4513",   padx=30, pady=30)
brown_frame.pack(fill=tk.BOTH, expand=True)

# Create a yellow frame inside the brown frame
yellow_frame = tk.Frame(brown_frame, bg="white", padx=20, pady=20)
yellow_frame.pack(fill=tk.BOTH, expand=True)

# Create a label with the "Game Panel" heading in a gold-colored box
heading_frame = tk.Frame(yellow_frame, bg="#FFC300", padx=20, pady=10)
heading_frame.pack(pady=50)

heading_label = tk.Label(heading_frame, text="Game Panel", font=("Helvetica", 36, "bold"), fg="#FFFFFF", bg="#FFC300")
heading_label.pack()

# Create a 2x2 grid of buttons in the center of the yellow frame
button_frame = tk.Frame(yellow_frame)
button_frame.pack(expand=True)

# Snake button
snake_button = tk.Button(button_frame, text="Snake", width=10, height=2,
                         font=("Helvetica", 14, "bold"),
                         command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\snake.py']))
snake_button.grid(row=0, column=0, padx=5, pady=5)
        
        # Brick button
brick_button = tk.Button(button_frame, text="Brick", width=10, height=2,
                         font=("Helvetica", 14, "bold"),
                         command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\brick.py']))
brick_button.grid(row=0, column=1, padx=5, pady=5)
        
        # Tic Tac Toe button
tic_button = tk.Button(button_frame, text="Tic Tac Toe", width=10, height=2,
                         font=("Helvetica", 14, "bold"),
                         command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\tic.py']))
tic_button.grid(row=1, column=0, padx=5, pady=5)
        
        # Number button
number_button = tk.Button(button_frame, text="Number", width=10, height=2,
                            font=("Helvetica", 14, "bold"),
                            command=lambda:subprocess.Popen(args=['python', r'F:\Project\Game\number.py']))
number_button.grid(row=1, column=1, padx=5, pady=5)
        
        # create label to display counts
self.count_label = tk.Label(self.master, text="Counts: [0, 0, 0, 0]", font=("Helvetica", 12))
self.count_label.pack(pady=10)

        # create label to display time
self.time_label = tk.Label(self.master, text="Time: 0", font=("Helvetica", 12))
self.time_label.pack(pady=10)
self.update_time()


def update_time(self):
        elapsed_time = round(time.time() - self.start_time)
        self.time_label.config(text=f"Time: {elapsed_time}")
        self.master.after(1000, self.update_time)

def on_button_click(self, index):
        self.counts[index] += 1
        self.count_label.config(text=f"Counts: {self.counts}")
    




        


# Start the Tkinter event loop
app = ClickCounter(root)
root.mainloop()

