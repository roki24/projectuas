<?php namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model
{
    protected $session;

    public function __construct()
    {
        parent::__construct();
        $this->session = session();
    }

    // Ambil seluruh isi keranjang
    public function getCart(): array
    {
        return $this->session->get('cart') ?? [];
    }

    // Tambah satu item (atau +1 jika sudah ada)
    public function addItem(array $item)
    {
        $cart = $this->getCart();
        $key  = $item['id_motor'];
        if (isset($cart[$key])) {
            $cart[$key]['qty']++;
        } else {
            $cart[$key] = [
                'id_motor' => $item['id_motor'],
                'nama'     => $item['nama'],
                'harga'    => $item['harga'],
                'qty'      => 1
            ];
        }
        $this->session->set('cart', $cart);
    }

    // Hapus satu item
    public function removeItem(int $id_motor)
    {
        $cart = $this->getCart();
        if (isset($cart[$id_motor])) {
            unset($cart[$id_motor]);
            $this->session->set('cart', $cart);
        }
    }

    // Clear all
    public function clearCart()
    {
        $this->session->remove('cart');
    }
}
