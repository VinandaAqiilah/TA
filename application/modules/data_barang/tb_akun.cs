using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Outlet
{
    #region Tb_akun
    public class Tb_akun
    {
        #region Member Variables
        protected int _id_akun;
        protected int _id_setting_outlet;
        protected string _nama_akun;
        protected string _saldo;
        protected string _rekening;
        protected string _telepon_bank;
        protected string _alamat_bank;
        protected string _nama_bank;
        protected string _status;
        #endregion
        #region Constructors
        public Tb_akun() { }
        public Tb_akun(int id_setting_outlet, string nama_akun, string saldo, string rekening, string telepon_bank, string alamat_bank, string nama_bank, string status)
        {
            this._id_setting_outlet=id_setting_outlet;
            this._nama_akun=nama_akun;
            this._saldo=saldo;
            this._rekening=rekening;
            this._telepon_bank=telepon_bank;
            this._alamat_bank=alamat_bank;
            this._nama_bank=nama_bank;
            this._status=status;
        }
        #endregion
        #region Public Properties
        public virtual int Id_akun
        {
            get {return _id_akun;}
            set {_id_akun=value;}
        }
        public virtual int Id_setting_outlet
        {
            get {return _id_setting_outlet;}
            set {_id_setting_outlet=value;}
        }
        public virtual string Nama_akun
        {
            get {return _nama_akun;}
            set {_nama_akun=value;}
        }
        public virtual string Saldo
        {
            get {return _saldo;}
            set {_saldo=value;}
        }
        public virtual string Rekening
        {
            get {return _rekening;}
            set {_rekening=value;}
        }
        public virtual string Telepon_bank
        {
            get {return _telepon_bank;}
            set {_telepon_bank=value;}
        }
        public virtual string Alamat_bank
        {
            get {return _alamat_bank;}
            set {_alamat_bank=value;}
        }
        public virtual string Nama_bank
        {
            get {return _nama_bank;}
            set {_nama_bank=value;}
        }
        public virtual string Status
        {
            get {return _status;}
            set {_status=value;}
        }
        #endregion
    }
    #endregion
}