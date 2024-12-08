@extends('vuexy.master')
@section('noi_dung')
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <b>Them Moi San Pham</b>
                    </div>
                    <div class="card-body">
                        <div class="mt-2">
                            <label>Ten San Pham</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label>Slug San Pham</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label>Gia</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label>Hinh Anh</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mt-2">
                            <label>Tinh Trang</label>
                            <select class="form-control">
                                <option value="0">Hoat Dong</option>
                                <option value="1">Tat</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary">Them Moi</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <b>Danh Sach San Pham</b>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Ten San Pham</th>
                                    <th class="text-center">Slug San Pham</th>
                                    <th class="text-center">Gia</th>
                                    <th class="text-center">Hinh Anh</th>
                                    <th class="text-center">Tinh Trang</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Iphone 14</td>
                                    <td>Iphone-14</td>
                                    <td>150.000</td>
                                    <td>
                                        <img src="data:image/jpeg;base64,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"
                                            style="width: 150px" alt="">
                                    </td>
                                    <td>
                                        <button class="btn btn-warning">Tam Tat</button>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success " data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Cap Nhat</button>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2">Xoa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Iphone 14</td>
                                    <td>Iphone-14</td>
                                    <td>150.000</td>
                                    <td>
                                        <img src="data:image/jpeg;base64,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"
                                            style="width: 150px" alt="">
                                    </td>
                                    <td>
                                        <button class="btn btn-warning">Tam Tat</button>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success">Cap Nhat</button>
                                        <button class="btn btn-danger">Xoa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Iphone 14</td>
                                    <td>Iphone-14</td>
                                    <td>150.000</td>
                                    <td>
                                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQERAPDxIPEA0QEA8PDw8PERAODQ8PFRIWFhUSExUYHSggGBomGxMVITEhJSkrLi4wGB8zODMtNygtLisBCgoKDg0OGxAQGisdHR8uLS8tLS0tLS0tLS0uListLS8tLS0tKy0tLTUtLS0tLTY3LS0tLS0tLS0rLTEtLS0tLv/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABwIDBAUGAQj/xABOEAACAQMBAwUIDAwDCQAAAAAAAQIDBBEFEiFhBzFBUbIGExclUnFzgRQiIzJTdJKTobHB0RYkNUJDVGJyhJGU0oLh8BU0Y6KzwsPT8f/EABoBAQADAQEBAAAAAAAAAAAAAAABAgMFBAb/xAAkEQEAAwACAgEEAwEAAAAAAAAAAQIRAxIEMSEFQUJRFDNhE//aAAwDAQACEQMRAD8AnEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAApnNRTcmlFLLbeEl1tgVA5647s7KDaU5VMdNOEpx9UuZlj8O7Pqr/Nf5k5Kcl1AOYXdzZ9Vf5r/MqXdvadVx80/vGSZLpQc1+G1p5Nx80/vMW85R9Oo760500+bbio58yb3+oZJkuvBwD5YtFX6efqpTPPDHovw9T5mZCEgA4DwxaL8PU+amPDHovw9T5mYHfgj/wx6L8PU+ZmZNlysaNVairlQb6asJU4/wA2B24LVtcQqRU6cozhJZjKLUotcGi6AAAAAAAAAAAAAAAAAAAAj/lK1SW1TtIvEHFVKi5lJttRUuCUW36iQCIuVGeLut8U3fN1S1faYR/qndnGlJwpJtLpxBzlxbkml5ki/pndQ7hPYnKM475QlClnHWmo70cLcRcKkpOO0mmt/MsrGfP0mZoee/SqY2ItSSj0b+gtFp02dSbofsi6qqlGqo7suTp05YWUubHEuV7qdvXdvXcZb0lVjFQazzOUVuwctDWIWsozdWrCtjMY28VKrsvpk20op8c56jyrfRuVUrQq1Ks1h1Y1lsXEM7lJrLUo5wsp9XNuLfdbXZ6nd95pVKr/ADITm10vZi219Bse4TuVoqjTvruEa9/cwhXlOrFSVCE45hSpRl7zEWuOc+Y5nuqqN2VZ9LpT+mLySXp9TFvQ9DS7CNOKvaz0+PTtZkSpwX5sPko5LlFv7u3tNvT6alW77GM5RpRrTp0sPMowaed6is4eMvzrfV7vBgVdQS6T3fx5tGenTjxZtXPSH/wq1/8A4/8AQUf/AFGz7m+6XXJ3NCFSFSpTlVhGpCpZ06dN02/btzUFs4W/OSRXqa6yunqS6yseDaPylnH060fnLoIxh5Mfko8utOt60XCtRo1IPc4zpwkvpRrKN6n0mxt7jJN+HF+TgxzncZGWlaq9MhKT068oyubWE25d4qReJ04t72t2fM1zvLJVIr1eXjzRceRdr1YiSocvkjLTDi8tet5iAAFGYAAAAAAAAAAAAAAAAQ9yqv8AG63xP/x1SYSG+Vf/AHyrxtYR9bjUSLV9phFV1VpR9+8PgssuWs6bW1Taa6ehrzmlqSW3Uc8tuL2H0KWNz/mZFlKPfpulnvTTSzz8M8S+o35x7qFTFacprMZ4cXzbsJfRhmXoEs1atSKcaUaFWEulOU47MIZ69r23+F9RXUkkt+GuppSWfWX6NRyUYr3vNGKSjFN9SW7PEffDPnXWd0Ms2NX0Muyd3G8UaFH0NLsIj/WpfiFbjQmvoz9htb3UsUqaz+ip9lHQ+ncffkl0/AztMyzb7VefeaW41fiaK91LOd5qa19xO7Na0h07+VWrqJatxK6WrcTjHelUL3iU/wClGMebGpEtNW4nQ6dqWcbyKLbUMdJ0WlapvW8tbirePhvHPW8Ouu6u1reiv9m77MSXSELC475rOj8I3PZRN58t5devNaHA8r+22AAPO84AAAAAAAAAAAAAAAARDylxUr+afwFD65kvEOcor8Y1vRUOyy1faa+0daj3POTbjhpvOGslu00GcefK6tmGftR1EZFakaL5DnZaG2sNza9Hj/uM/TdFUMc+7peE8cFl7+LZt4yK1MGQw+6NL2JcLoVCeOHMc7eantUqTzz0qb/5Eb7ujl+K3HoamfNj/wCEbq7bpxXkrZ/lzHR+m8sUvbfvCY5Zp6ZVzeGDO5ZYnMttlfI8y0z8KTeZX+/M9jXZjZGTyR5FkbLY0rpm20+/w1vObjIyKFbDOn4nmTuSvXltVJ3cbd981rS1n3sar/mpfcfRJ8r8mNfb1mzfVJRXq3/W2fVBzPNvF+e1o/atrdp2QAHlVAAAAAAAAAAAAAAAACGOUl+MavoqHZZM5DPKm/GMvi9D65lq+0w5pSK1MxlIrUi6zKjI9ddLCbScniK6W+BqtQv3SS2UnKWcZ5kka6WqSclPZhtxWE3tNJcFncyRu9dl+LXPoKn2EXUpLme5Pp6uJJGrzk7WrtJKXeamUt6T2WRmV7TW2wrZdrQcXhrf/rDXAtmXa3Ucd7rRc6fQ4tKrT69hvnX7L3ebnMlaM6m+2qU6+eantKlc82cd6m8yf7jl5xad+YM/TVgzqmiXcd0ra5T40aq+wuQ0C7xmVGdKHwlwlbUvl1MRzwyU+TJa0vqOI7T6fe8et+Zf66TLnSoUeecbmqvzae0raL/am8Ofmikv2nzGBWqym9qTy/Ukl0JJbkuCNK36evaJh13JE/G9n6Q+sT5S5GvyxZ/vVOxI+rTIAAAAAAAAAAAAAAAAAAAIW5Vn4xfxej9cyaSE+Vl+MX8WofXMtX2mHKKRWpGOpFSkXWY2s024xmvzcp+Z9P0fSaZyOkTKk1zbsLmXUEMa+nN2lRz3TdGpn5LxniR2SNqsvcK/oanZZHtGKzmXvVva5s9SKzGyiV62tE1t1Jd7pb/bY2pza6KccrafrSXS0ZH+0adPdQo010d8uIxuar3+TJd7XqjldbMKvVc3mXVhJboxiuZJdCLRVDbfhNfLdG6uKa5tmjUlQhj92GEUy1+4ljvzhcLmfsinTrSa6ttrbXqaZqwRo2Ljb1veL2PV8mUnK2k+pSl7an/iclxRg1aUoNxkmpLc0+coMhTc4qEt7isQfSl5D4dXUTEaOu5GvyxZ/vVOxI+rT5S5GvyzZ/vVP+nI+rSAAAAAAAAAAAAAAAAAAAAhDldfjJ/FqPamTeQbywPxl/DUO1MtX2mHIKRUpGOpFSkXWZCkVKRjqRUpAeak/ca3oavZZx6tmqcX5Xtvu+g6y/fuNb0NXsssVtNxSp7uanT7KNeKuzM/483PfrMR+3GzgUNG5ubFmHO0ZnanyvFmFgGV7GYVsynVbWMkZFtSyzIpWTNrY6fvW4246fLO9shuOSmjsa3Z8XOS9cJfamfUh84dw9r3vWtNflRqr+UZfefR5lzV63mE8Vu1IkABm0AAAAAAAAAAAAAAAACC+WP8pfw1HtTJ0IK5ZH4y/hqPamWqmHEplSkW0z3JdZdUipMs5Pcge3j9yrehq9lnaVNJzSp7uenDso4e6fuVb0NXssm2009OhR3foaXYRrxWyZeTyazMxMIsu9G4Gsq6RwJYutIz0GsraLwJtkq1nEZvSuBVDSeBIL0XgV09E4FcadnD2+jvqN5p+jb1uOqt9F4G3tdLS6DSsxDHkmZcdptr3vWtIXWrn6Ik5kSajQ2Nc0XjG77KJbPNyzt5lvw168cQAAzagAAAAAAAAAAAAAAABBPLL+Uv4aj2pk7ERct2jz75QvYpulsd4qtfmSTzBvg8tEwmEWnuTwFllWT3JQe5J0eXD9zrehrdhn0VpdNOhQ9DR7CPndJPMZPEZRqU3LyVOEobXq2s+omfk47padza0raclC/tacKFehNpVH3uKiqsfKjJJPK3byNUvGulnbosTskbFx4HmxwJ7MurVuwXUVRsV1Gx2OA2OBPY6sOFokX4UUXtngU1qkYRc5uMIRWZSm1GMV1tvciOyesOJ7oY+PdDx5N39USUCLe56v8A7V1tXtD22nadQnQp1sNQrXE37ZwfSujPTs56SUiktI9AAIAAAAAAAAAAAAAAAAAtXNvCpGVOpGM6ck4yjJKUZLqaLoA4W+5KdNqScoKtRzv2adT2i8ykngxPBBY/DXXyqf8AaSKCdlOo68EFj8NdfKp/2jwQWPw118qH9pIoGyajrwQWPw118qn/AGnlTkesJYU6lxNRxsuThtwxzKM4pSS4ZxwJGA01HT5ILPoudQS6vZEsIeCCz/WtR/qJEighCOvBBZ/rOof1Eh4ILP8AWdQ/qJEigCOvBBZ/rWo/1EiunyP6bmLrSu7hRe0o1q85Qz5iQgBi6bp1G2pxo29OFKjBYjCCUYoygAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//Z"
                                            style="width: 150px" alt="">
                                    </td>
                                    <td>
                                        <button class="btn btn-warning">Tam Tat</button>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success">Cap Nhat</button>
                                        <button class="btn btn-danger">Xoa</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Iphone 14</td>
                                    <td>Iphone-14</td>
                                    <td>150.000</td>
                                    <td>
                                        <img src="data:image/jpeg;base64,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"
                                            style="width: 150px" alt="">
                                    </td>
                                    <td>
                                        <button class="btn btn-warning">Tam Tat</button>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success">Cap Nhat</button>
                                        <button class="btn btn-danger">Xoa</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <b>Cap Nhat San Pham</b>
                                            </div>
                                            <div class="card-body">
                                                <div class="mt-2">
                                                    <label>Ten San Pham</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Slug San Pham</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Gia</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="mt-2">
                                                    <label>Tinh Trang</label>
                                                    <select class="form-control">
                                                        <option value="0">Hoat Dong</option>
                                                        <option value="1">Tat</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-warning" role="alert">
                                            Ban Co Chac Chan Muon Xoa
                                          </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
